<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ログイン画面を表示する
    public function showLoginForm()
    {
        return view('html.User.login.login');
    }

    // ログイン処理を行う
    public function login(Request $request)
    {


        // バリデーション

        $rules = [
            'email' => 'required|email', // 必須、メールアドレスの形式
            'password' => 'required|min:8', // 必須、最低8文字
        ];

        $messages = [
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスの形式で入力してください。',
            'password.required' => 'パスワードは必須です。',
            'password.min' => 'パスワードは最低8文字である必要があります。',
        ];

        $request->validate($rules, $messages);

        // ログイン情報を検証し、ログインが成功したらホーム画面にリダイレクト
        //auth()->attemptはメソッドが成功すると、ユーザーはセッションに保存され、アプリケーション内で認証済みとして扱われるようになります。
        //それ以降のリクエストで、auth()->user()などのメソッドを使用して、認証されたユーザーの情報にアクセスすることができます。

        // 認証試行
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        // ログイン成功
        // ユーザーのホームページやダッシュボードなどへリダイレクト
        return redirect()->intended(route('main'));
    }

    // companyモデルでの認証試行
    if (auth()->guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // こちらで何か別の処理やリダイレクトを行うか、同じリダイレクトを使用します。
        return redirect()->intended(route('companyhome'));
    }

    // 認証失敗
    return redirect('/login')->with('error', 'ログインに失敗しました。');
    }



}

