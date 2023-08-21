<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    //
    public function ShowPasswordResetForm()
    {
        return view('html.passeword_reset');
    }
}
