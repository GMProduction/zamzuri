<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Profile;
use http\Client\Curl\User;

class UserController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $user = Profile::with('user')->get();
//        return $user->toArray();
        return view('admin.user.user')->with(['user' => $user]);

    }
}
