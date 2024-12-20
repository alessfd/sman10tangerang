<?php

namespace App\Providers;

use App;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

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
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');
        if (!(App::environment('local')))
        {
            \URL::forceScheme('https');
        }
    }
}
