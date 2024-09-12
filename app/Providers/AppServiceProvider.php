<?php

namespace App\Providers;

use App\Models\Alamat;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Nowa;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.navbar', function ($view) {
            $view->with([
                'nowa' => Nowa::getByKey('WA'),
                'ig' => Nowa::getByKey('IG'),
                'fb' => Nowa::getByKey('FB'),
                'x' => Nowa::getByKey('TWITTER'),
                'linkedin' => Nowa::getByKey('LINKEDIN'),
                'alamat' => Alamat::get()
            ]);
        });
    }
}
