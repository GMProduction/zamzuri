<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\Products;
use App\Models\Transaction;
use App\Models\Vendor;
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

    public function deleteCart()
    {
        try {
            $id = $this->postField('id');
            Cart::destroy($id);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

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
            return $this->jsonResponse($transactions->id, 200);
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

    public function detailHistory($id)
    {
        $trans = Transaction::with('cart.product')->where('id', '=', $id)->firstOrFail();
//        return $trans->toArray();
        return view('user.transaksi.detailPesanan')->with(['trans' => $trans]);
    }

    public function pagePayment($id)
    {
        $vendors = Vendor::all();
        $transaction = Transaction::with('cart.product')->whereHas('cart', function (Builder $query){
            $query->where('user_id', '=', auth()->id());
        })->where('id', '=', $id)->firstOrFail();
        return view('payment')->with(['transaction' => $transaction, 'vendors' => $vendors]);
    }

    public function send()
    {
        $image = $this->generateImageName('gambar');
        $data = [
            'transactions_id' => $this->postField('id'),
            'vendors_id' => $this->postField('bank'),
            'user_id' => auth()->id(),
            'url' => $image,
            'description' => '',
            'status' => '0',
        ];

        $this->uploadImage('gambar', $image, 'bukti');
        $this->insert(Payment::class, $data);
        return redirect('/');
    }


}
