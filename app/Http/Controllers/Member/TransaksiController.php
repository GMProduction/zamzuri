<?php

namespace App\Http\Controllers\Member;

use App\Helper\CustomController;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $user = auth()->user()->id;
        $transaksi = Cart::where('user_id',$user)->with('transaction','product')->get();
//        $transaksi = Transaction::where('user_id',$user)->get();
//        return $transaksi->toArray();
        return view('user.transaksi.transaksi')->with(['transaksi' => $transaksi]);
    }

    public function detail($id){
        $transaksi = Transaction::where('id', $id)->with(['payment.vendor','cart.product'])->first();
//        return $transaksi->toArray();
        return view('user.pesanan.detailPesanan')->with(['transaksi' => $transaksi]);
    }

}
