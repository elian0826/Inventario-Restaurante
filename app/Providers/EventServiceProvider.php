<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\ExampleListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // 'App\Events\SomeEvent' => [
        //     ExampleListener::class,
        // ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
