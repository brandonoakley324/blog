<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['partials.meta_dynamic' ] , function($view){
            $view()->with('blog' , Blog::all()); //Blog not blogs because I used that in met_dynamic
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
