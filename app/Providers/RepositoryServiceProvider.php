<?php

namespace App\Providers;

use App\Interfaces\ConceitoRepositoryInterface;
use App\Repositories\ConceitoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ConceitoRepositoryInterface::class,ConceitoRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
