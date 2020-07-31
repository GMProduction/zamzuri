<?php

namespace App\Http\Controllers\Member;

use App\Helper\CustomController;
use App\Models\Profile;
use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class ProfileController extends CustomController
{
    public function __construct()
    {
        parent::__construct(    );
    }

    public function index(){
        $user = Profile::where('user_id', auth()->user()->id)->with('user')->first();

        if($this->request->isMethod('POST')){
            $dataUser = [
                'email' => $this->postField('email'),
            ];

            $user->nama = $this->postField('nama');
            $user->alamat = $this->postField('alamat');
            $user->no_hp = $this->postField('phone');
            $user->update();
            $this->update(User::class,$dataUser);

            return redirect()->back()->with(['success' => 'success']);
        }
//        return $user->toArray();
        return view('user.profil.profil')->with(['user' => $user]);
    }


}
