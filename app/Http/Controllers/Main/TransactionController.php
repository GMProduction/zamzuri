<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Products;
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
//        return $carts->toArray();
        return view('cart')->with(['carts' => $carts]);
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
}
