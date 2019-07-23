<?php

namespace App\Providers;


use App\Repositories\Contracts\EventRepositoryInterface;
use App\Repositories\Contracts\LookRepositoryInterface;
use App\Repositories\Eloquents\EventRepository;
use App\Repositories\Eloquents\LookRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        $this->app->bind(LookRepositoryInterface::class, LookRepository::class);
    }
}