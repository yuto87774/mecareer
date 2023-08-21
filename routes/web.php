<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BookMarkController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);


//HP画面へのルート
Route::get('/', function () {
    return view('html.HP');
})->name('HP');

Route::get('/company', function () {
    return view('html.company.regist1');
})->name('companyRegist');

//企業要ページ遷移


//新規登録画面に遷移するためのルート
Route::get('/regist', [RegistController::class, 'showRegistFirstForm'])->name('registFirst');
Route::post('/regist', [RegistController::class, 'regist']);

Route::get('/regist1', [RegistController::class, 'showRegist1Form'])->name('regist1');

Route::get('/regist2', [RegistController::class, 'showRegist2Form'])->name('regist2');

Route::get('/regist3', [RegistController::class, 'showRegist3Form'])->name('regist3');

//新規登録後に完了画面に遷移するルート
Route::get('/SingUp/Complete', [SingUpController::class, 'ShowSingUpComplete']);
Route::post('/Apphome', [SingUpController::class, 'goApphome']);



//ブックマーク画面ルート
Route::get('/BookMark', [BookMarkController::class, 'showBookMark'])->name('bookmark');

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('/chat/{user}', [ChatController::class, 'show'])->name('chat.show');
Route::post('/chat/{user}', [ChatController::class, 'sendMessage'])->name('chat.send');
Route::get('/chat/{user}/edit/{message}', [ChatController::class, 'editMessage'])->name('chat.edit');
Route::put('/chat/{user}/update/{message}', [ChatController::class, 'updateMessage'])->name('chat.update');
Route::delete('/chat/{user}/delete/{message}', [ChatController::class, 'deleteMessage'])->name('chat.delete');


Route::get('/CompanyHP', [companyController::class, 'showCompanyHP']);

//パスワードリセット
Route::get('/passwordreset', [PasswordResetController::class, 'ShowPasswordResetForm'])->name('passwordreset');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('nextmain');


Route::group(['middleware' => ['auth']], function () {
    //ユーザーホーム画面
    Route::get('/main', [MainController::class, 'ShowMain'])->name('main');
    //ユーザープロフィール画面ルート
    Route::get('/userProfile', [MainController::class, 'showUserProfile'])->name('userprofile');
    //ユーザー基本情報
    Route::get('/basicInformation', [UserProfileController::class, 'showBasicInformation'])->name('basicInformation');
    //お問い合わせ
    Route::get('/contact', [UserProfileController::class, 'showBasicInformation'])->name('basicInformation');
    //ユーザーブックマーク
    Route::get('/userbookmark', [MainController::class, 'showUserbookmark'])->name('userbookmark');

    //企業ホーム

    //企業募集文章
    Route::get('/companyIntroduction', [companyController::class, 'showedit'])->name('companyIntroduction');

    Route::post('/upload-image', 'ImageUploadController@upload')->name('image.upload');
});

//企業新規登録
Route::post('/authenticationKey', [RegistController::class, 'startRegistration'])->name('companyAuthenticationKey');

Route::get('/regist/complete', [RegistController::class, 'showBasicInformation'])->name('basicInformation');

Route::post('/company/completeAuthenticationKey', [RegistController::class, 'completeRegistration'])->name('completeRegistration');

//お問い合わせフォーム
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('storeContact');

//利用規約
Route::get('/terms', function () {
    return view('html.terms_of_user');
})->name('terms');

//認証キーの再送信
Route::post('/reVcode', [RegistController::class, 'resendVerificationCode'])->name('reVcode');


Route::group(['middleware' => ['auth:company']], function () {
    Route::get('/companyhome', [companyController::class, 'showCompanyhome'])->name('companyhome');

    //企業募集文章
    Route::get('/companyedit', [companyController::class, 'showedit'])->name('companyedit');

});

//企業基本情報
Route::get('/company_basicinfo', [companyController::class, 'showbasicinfo'])->name('company_basicinfo');

//企業紹介文
Route::get('/companyintroduction', [companyController::class, 'showintroduction'])->name('companyintroduction');
Route::post('/companyintroduction', [companyController::class, 'storeintroduction'])->name('storecompanyintroduction');

