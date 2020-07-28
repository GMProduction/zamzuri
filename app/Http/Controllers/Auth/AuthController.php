<?php

namespace App\Http\Controllers\Auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends CustomController
{
    //

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function pageLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];
        if ($this->isAuth($credentials)) {
            $roles = Auth::user()->roles;
            if ($roles !== 'member') {
                return redirect('/admin');
            }
            return redirect('/');
        }
        return redirect()->back()->withInput()->with('failed', 'Periksa Kembali Username dan Password Anda');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
