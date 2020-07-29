<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends CustomController
{
    //

    public function getVoucher()
    {
        try {
            $code = $this->field('code');
            $voucher = Voucher::where('code', '=', $code)->first();
            return $this->jsonResponse($voucher, 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }
}
