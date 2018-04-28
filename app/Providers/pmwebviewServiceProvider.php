<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;


class pmwebviewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
        if (Request::segment(1) == 'engineer') {
            $halaman = 'engineer';
        }
        if (Request::segment(1) == 'about') {
            $halaman = 'about';
        }
        if (Request::segment(1) == 'login') {
            $halaman = 'login';
        }
        if (Request::segment(1) == 'register') {
            $halaman = 'register';
        }
        //variabel global sehingga bisa dipakai di semua template
        view()->share('halaman', $halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
