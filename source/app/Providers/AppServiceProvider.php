<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $mySettings = fopen(public_path('settings.txt'), 'r') or die("Unable to open file!");
        $data = fread($mySettings, filesize(public_path("settings.txt")));
        fclose($mySettings);
        $data = explode("\n", $data);
        foreach ($data as $key => $value) {
            if ($value != '') {
                $variable = explode('=', $value);
                $address2 = '';
                switch ($variable[0]) {
                    case 'companyName':
                        $companyName = $variable[1];
                        break;
                    case 'phone1':
                        $phone1 = $variable[1];
                        break;
                    case 'phone2':
                        $phone2 = $variable[1];
                        break;
                    case 'phone3':
                        $phone3 = $variable[1];
                        break;
                    case 'email':
                        $email = $variable[1];
                        break;
                    case 'address1':
                        $address1 = $variable[1];
                        break;
                    case 'address2':
                        $address2 = $variable[1];
                        break;
                    default:
                        break;
                }
            }
        }
        View::share('settings', compact('companyName', 'phone1', 'phone2', 'phone3', 'email', 'address1', 'address2'));
        Paginator::useBootstrap();
    }
}
