<?php

namespace Properos\Base;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->publishes([
        //     __DIR__.'/Classes' => base_path('app/Helpers'),
        // ]);
        // $this->publishes([
        //     __DIR__.'/Exceptions' => base_path('app/Exceptions'),
        // ]);

        $this->publishes([
            __DIR__.'/public/be' => public_path('/be'),
        ], 'base');
        $this->publishes([
            __DIR__.'/public/fe' => public_path('/themes'),
        ], 'base');
        $this->publishes([
            __DIR__.'/public/.well-known' => public_path('/.well-known'),
        ], 'base');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views'),
        ]);
        $this->publishes([
            __DIR__.'/resources/assets/js/be' => resource_path('assets/js/be'),
        ]);
        $this->publishes([
            __DIR__.'/resources/assets/js/global' => resource_path('assets/js'),
        ]);
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Properos\Base\Controllers\ApiController');

    }
}
