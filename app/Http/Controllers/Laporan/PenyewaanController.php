<?php

namespace App\Http\Controllers\Laporan;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenyewaanController extends CustomController
{
    //
    /**
     * PenyewaanController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return view('laporan.penyewaan.index');
    }
}
