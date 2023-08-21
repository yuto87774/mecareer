<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //ユーザープロフィール画面遷移
    public function showUserProfile()
    {
        return view('html.User.userProfile');
    }
    public function showBasicInformation()
    {
        return view('html.User.basicInformation');
    }


}
