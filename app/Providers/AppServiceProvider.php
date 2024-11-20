<?php

namespace App\Providers;

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Blade;

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

        Blade::directive('admin', function ($expression) {

            return "<?php if(auth()->check() && auth()->user()->role === 'admin'): ?>";
        });

        Blade::directive('endadmin', function ($expression) {

            return "<?php endif; ?>";
        });
    }
}
