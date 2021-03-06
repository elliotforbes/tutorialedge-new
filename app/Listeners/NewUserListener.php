<?php

namespace App\Listeners;

use App\Events\NewUserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserListener
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
     * @param  NewUserEvent  $event
     * @return void
     */
    public function handle(NewUserEvent $event)
    {
        Log::info("A New User Has Registered");
        // send an email to me.
        $user = User::findOrFail(1);
        Log::info($user);
        
        Mail::send('emails.light', ['user' => $user], function ($m) use ($user) {
            $m->from("elliot@tutorialedge.net", 'TutorialEdge');
            
            $m->to($user->email, $user->name)->subject('Test Email!');
        });
        
        Log::info("Successfully sent email to User");
    }
}
