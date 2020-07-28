<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
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

    public function addToCart()
    {
        try {

        }catch (\Exception $e){
            return $this->jsonResponse('failed', 500);
        }
    }
}
