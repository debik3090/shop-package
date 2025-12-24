<?php

namespace Debik3090\ShopPackage;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

   public function boot(): void
{
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'shop');
    
    // Publish migrations
    $this->publishes([
        __DIR__.'/../database/migrations' => database_path('migrations'),
    ], 'shop-migrations');
}

}
