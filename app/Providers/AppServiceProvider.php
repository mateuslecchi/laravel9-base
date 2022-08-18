<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        //Paginator do Bootstrap
        Paginator::useBootstrap();

        //Padrão mínimo de senha
        Password::defaults(function () {
            return Password::min(8)
                ->letters()
                ->numbers()
                ->mixedCase();
        });
    }
}
