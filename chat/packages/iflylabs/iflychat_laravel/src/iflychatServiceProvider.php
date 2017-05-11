<?php

namespace iflylabs\iflychat_laravel;

use Illuminate\Support\ServiceProvider;

class iflychatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Reuqire routes
        require __DIR__."/Http/routes.php";

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register Controller
        $this->app->make('iflylabs\iflychat_laravel\Http\Controllers\iflychatController');
    }
}
