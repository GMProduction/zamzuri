<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataTransaksi(Request $request)
    {

        $fawal = DateTime::createFromFormat('m/d/Y', $request->get('awal'));
        $fakhir = DateTime::createFromFormat('m/d/Y', $request->get('akhir'));
        $awal = $fawal->format('Y-m-d');
        $akhir = $fakhir->format('Y-m-d');

        $transaksi = Transaction::whereBetween('created_at',[$awal,$akhir])->with(['cart.user.profile','payment.vendor','cart.product'])->get();
//        return $transaksi->toArray();
        $data['transaksi'] = $transaksi;
        $data['awal'] = $awal;
        $data['akhir'] = $akhir;
        return view('admin.transaksi.cetak')->with($data);
    }

    public function cetakAdminDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataTransaksi($request))->setPaper('b4', 'landscape');
        return $pdf->stream();
//        return $this->adminDataTransaksi($request);
    }


}
