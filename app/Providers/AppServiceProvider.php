<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\BookRepository;
use App\Repositories\EloquentBook;

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
        $this->app->singleton(BookRepository::class, EloquentBook::class);
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
