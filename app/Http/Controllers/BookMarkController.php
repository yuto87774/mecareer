<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookMarkController extends Controller
{
    //ブックマーク画面表示
    public function showBookMark()
    {
        return view('html.BookMark');
    }
}
