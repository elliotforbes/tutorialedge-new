<?php

namespace App\Listeners;

use App\Events\ErrorEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;
use App\User;
use Mail;

class ErrorListener
{
    
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ErrorEvent  $event
     * @return void
     */
    public function handle(ErrorEvent $event)
    {
        Log::info("An Error has occured. Adding Error Event to Database");
        
        Log::info($event->error);
        
    }
}
