<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\PostViewEvent' => [
            'App\Listeners\PostViewListener',
        ],
        
        'App\Events\NewUserEvent' => [
            'App\Listeners\NewUserListener',  
        ],
        
        'App\Events\ErrorEvent' => [
            'App\Listeners\ErrorListener',  
        ],
        
        'App\Events\CommentEvent' => [
            'App\Listeners\CommentListener',  
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
