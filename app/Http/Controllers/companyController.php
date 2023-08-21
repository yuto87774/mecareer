<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company_profile;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    //
    public function showCompanyHP()
    {
        return view('html.CompanyHP');
    }

    public function register()
    {
        return view('html.CompanyHP');
    }

    //企業ホーム画面
    public function showCompanyhome()
    {
        return view('html.company.home');
    }

    //企業紹介文編集画面
    public function showedit()
    {
        return view('html.company.company_edit');
    }

    //企業基本情報
    public function showbasicinfo()
    {
        return view('html.company.company_basicinfo');
    }

    //企業紹介
    public function showintroduction()
    {
        return view('html.company.company_introduction');
    }

    public function storeintroduction(Request $request)
    {
        $companyId = Auth::guard('company')->id();

    // 企業のプロフィールを取得
    $companyProfile = company_profile::where('company_id', $companyId)->first();

    if (!$companyProfile) {
        // この企業のプロフィールが存在しない場合、新しいインスタンスを作成
        $companyProfile = new company_profile;
        $companyProfile->company_id = $companyId;
    }

    // 入力されたデータでプロフィールを更新
    $companyProfile->self_introduction = $request->input('self_introduction_html');
    $companyProfile->company_text1 = $request->input('editortext2_html');
    $companyProfile->company_text2 = $request->input('editortext3_html');
    $companyProfile->recruiting_people = $request->input('editortext4_html');
    $companyProfile->main_img = $request->input('editorimg_html');
    // 他のフィールドもここに追加してください

    $companyProfile->save();


    return view('html.company.company_introduction');
    }
}
