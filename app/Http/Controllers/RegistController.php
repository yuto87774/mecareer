<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company;
use App\Models\VerificationToken;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class RegistController extends Controller
{
    public function showRegistFirstForm()
    {
        return view('html.regist.registFirst');
    }

    public function regist(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'name_kana' => 'required|max:50',
            'birthdate' => 'required|date|before_or_equal:today',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User([
            'name' => $request->name,
            'name_kana' => $request->name_kana,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();

        Auth::login($user); // ここで新規登録したユーザーをログインさせる

        return redirect('/SingUp/Complete');
    }

    public function showRegistVerificationTokenForm()
    {
        return view('html.regist.registVerificationToken');
    }

    public function showRegist2Form()
    {
        return view('html.regist.regist2');
    }

    public function showRegist3Form()
    {
        return view('html.regist.regist3');
    }

    public function ShowSingUpComplete()
    {
        return view('html.SingUpComplete');
    }

    public function goApphome()
    {
        return view('html.Apphome');
    }

    public function show()
    {
        return view('html.regist.registcompletion');
    }

    public function startRegistration(Request $request)
    {
        // バリデーションルール
        $this->validate($request, [
            'name' => 'required|string|max:30',
            'person_in_charge' => 'required|string|max:30',
            'phone_number' => 'required|string|max:15', // 15文字を上限と仮定
            'email' => [
                'required',
                'email',
                Rule::unique('companies', 'email') // companiesテーブルのemailカラムで一意であること
            ],
            'password' => 'required|string|min:8'
        ]);

        $email = $request->input('email');

        $token = rand(1000, 9999);  // 4桁のランダムな数字

        $company = new company([
            'name' => $request->name,
            'person_in_charge' => $request->person_in_charge,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_verified' => false,
        ]);
        $company->save();

        $verificationToken = new VerificationToken;
        $verificationToken->token = $token;
        $verificationToken->company_id = $company->company_id; // 保存したCompanyのIDを使用
        $verificationToken->expires_at = Carbon::now()->addHours(1);
        $verificationToken->save();

        // 認証キーを含む確認メールの送信
        Mail::send('emails.verify', ['token' => $token], function ($m) use ($email) {
            $m->to($email)->subject('Your verification code');
        });

        return view('html.regist.registAuthenticationKey', ['email' => $email]);
    }

    public function completeRegistration(Request $request)
    {
        $token = $request->input('token');

        $verification = VerificationToken::where('token', $token)->first();


        if (!$verification || Carbon::parse($verification->expires_at)->isPast()) {
            return response()->json(['message' => 'Token is invalid or has expired.']);
        }

        if ($verification) {
            $company = Company::find($verification->company_id);
            $company->is_verified = true;
            $company->save();
            return view('html.regist.registcompletion');
        } else {
            // 認証失敗の処理...
        }

        // トークンの削除
        VerificationToken::where('token', $token)->delete();
    }


    public function resendVerificationCode(Request $request)
{
    $email = $request->input('email');  // 再送信を要求するメールアドレス

    // 入力されたメールアドレスがデータベースに存在するか確認
    $company = Company::where('email', $email)->first();

    if (!$company) {
        return redirect()->back()->with('error', '入力されたメールアドレスが存在しません。');
    }

    // 既存の認証キーを取得
    $verificationToken = VerificationToken::where('company_id', $company->company_id)->first();

    // 新しい認証キーを生成
    $newToken = rand(1000, 9999);

    // 既存の認証キーが存在する場合、更新。存在しない場合、新しいレコードを作成。
    if ($verificationToken) {
        $verificationToken->token = $newToken;
        $verificationToken->expires_at = Carbon::now()->addHours(1);
        $verificationToken->save();
    } else {
        $newVerificationToken = new VerificationToken;
        $newVerificationToken->token = $newToken;
        $newVerificationToken->company_id = $company->company_id;
        $newVerificationToken->expires_at = Carbon::now()->addHours(1);
        $newVerificationToken->save();
    }

    // 新しい認証キーを含む確認メールの送信
    Mail::send('emails.reverify', ['token' => $newToken], function ($m) use ($email) {
        $m->to($email)->subject('認証キーの再送信');
    });

    return redirect()->back()->with('success', '認証キーを再送信しました。');
}

}
