<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\company_profile; // company_profileモデルへの正しいパスを確認してください。

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
{
    View::composer('*', function ($view) {
        $company = Auth::guard('company')->user();

        if ($company) {
            $companyProfile = $company->profile;
            $view->with('companyProfile', $companyProfile);
        } else {
            $view->with('companyProfile', null);  // null を返す
        }
    });
}


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

