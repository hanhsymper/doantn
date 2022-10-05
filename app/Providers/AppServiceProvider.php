<?php

namespace App\Providers;
use App\Loaitour;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        view()->share('urlAdmin',getenv('TEMPLATES_URL_ADMIN'));
        view()->share('urlPublic',getenv('TEMPLATES_URL_PUBLIC'));
        view()->share('urlLogin',getenv('TEMPLATES_URL_LOGIN'));
        view()->share('urlImage',getenv('TEMPLATES_URL_IMAGE'));

        //header
        $objLoaitour = new Loaitour;
        $objItemsLT = $objLoaitour -> getItemsNP();
        view::share('objItemsLT',$objItemsLT);
    }
}
