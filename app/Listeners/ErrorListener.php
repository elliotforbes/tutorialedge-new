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
        Log::info("An Error has occured. Sending Email to Admin now...");
        
        // send an email to me.
        $user = User::findOrFail(1);
        
        Log::info($user);
        
        $data = [
           'error' => $event->error,
        ];  
        
        Mail::send('emails.error', $data, function ($m) use ($user) {
            $m->from("elliot@tutorialedge.net", 'TutorialEdge');
            
            $m->to($user->email, $user->name)->subject('Error Event');
        });
        
        Log::info("Successfully sent email to Admin");
    }
}
