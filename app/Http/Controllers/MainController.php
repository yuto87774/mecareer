<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //ユーザーメインページ
    public function ShowMain()
    {
        return view('html.User.main');
    }
    //ユーザープロフィル
    public function showUserProfile()
    {
        return view('html.User.userProfile');
    }

    //ユーザーブックマーク
    public function showUserbookmark()
    {
        return view('html.User.user_bookmark');
    }

}
