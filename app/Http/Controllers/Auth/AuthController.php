<?php

namespace App\Http\Controllers\Auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_pemohon;
use App\Models\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register()
    {
        if ($this->postField('password') !== $this->postField('password_confirmation')) {
            return redirect()->back()->with(['fail' => 'Password Not Match']);
            dd('fail');
        }
        $data = [
            'username' => $this->postField('username'),
            'username' => $this->postField('email'),
            'password' => Hash::make($this->postField('password')),
            'roles' => 'member'
        ];


        $user = $this->insert(User::class, $data);
        $dataProfile = [
            'user_id' => $user->id,
        ];
        $this->insert(Profile::class, $dataProfile);
        Auth::loginUsingId($user->id);
        return redirect('/user');
    }
}
