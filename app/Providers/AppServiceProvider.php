<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// esto evita el error "Specified key was too long"
use Illuminate\Support\Facades\Schema; 
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
        // para evitar el error "Specified key was too long"
        Schema::defaultStringLength(191);

        
    }
}
