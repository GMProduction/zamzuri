<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Transaction;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TransactionController extends CustomController
{
    //

    /**
     * TransactionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function cartPage()
    {
        $carts = Cart::with('product')->where('transactions_id', '=', null)->where('user_id', '=', auth()->id())->get();
        $subTotal = $carts->sum(function ($v) {
            return ($v->harga * $v->qty);
        });
//        return $carts->toArray();
        return view('cart')->with(['carts' => $carts, 'subTotal' => $subTotal]);
    }

    public function addToCart()
    {
        try {
            $data = [
                'user_id' => auth()->id(),
                'harga' => $this->postField('harga'),
                'qty' => $this->postField('qty'),
                'product_id' => $this->postField('id')
            ];

            $this->insert(Cart::class, $data);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }

    public function cekOut()
    {
        try {
            $tgl1 = DateTime::createFromFormat('m/d/Y', $this->postField('sewa'));
            $tgl2 = DateTime::createFromFormat('m/d/Y', $this->postField('kembali'));
            $sewa = $tgl1->format('Y-m-d');
            $kembali = $tgl2->format('Y-m-d');
            $data = [
                'no_transaksi' => 'TR-' . \date('YmdHis'),
                'discount' => $this->postField('diskon'),
                'nominal' => $this->postField('nominal'),
                'tgl_sewa' => $sewa,
                'tgl_tempo' => $kembali,
                'status' => 'menunggu',
            ];

            $transactions = $this->insert(Transaction::class, $data);
            Cart::where('transactions_id', '=', null)->where('user_id', '=', auth()->id())->update(['transactions_id' => $transactions->id]);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }

    public function pageTransaksi()
    {
        $transaction = Transaction::with('cart')->whereHas('cart', function (Builder $query){
            $query->where('user_id', '=', auth()->id());
        })->get();
//        return $transaction->toArray();
        return view('user.transaksi.transaksi')->with(['transaction' => $transaction]);
    }
}
