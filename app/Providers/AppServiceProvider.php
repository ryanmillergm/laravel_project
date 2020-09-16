<?php

namespace App\Providers;

use App\Example;
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
//        $this->app->singleton('App\ExampleTwo', function () {
//            $collaborator = new Collaborator();
//            $foo = 'foobar';
//
//            return new ExampleTwo($collaborator, $foo);
//        });

        $this->app->bind('example', function () {
            return new Example();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
