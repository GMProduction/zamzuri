<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;

class TransaksiController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        return view('admin.transaksi.transaksi');
    }
}
