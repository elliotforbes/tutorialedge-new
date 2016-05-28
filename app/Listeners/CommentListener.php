<?php

namespace App\Listeners;

use App\Events\CommentEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentListener
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
     * @param  CommentEvent  $event
     * @return void
     */
    public function handle(CommentEvent $event)
    {
        Log::info("User has posted a comment");
        // send an email to me.
        $user = User::findOrFail(1);
        Log::info($user);
        
        $data = [
            'comment' => $event->comment,
        ];
        
        Mail::send('emails.comment', $data, function ($m) use ($user) {
            $m->from("elliot@tutorialedge.net", 'TutorialEdge');
            
            $m->to($user->email, $user->name)->subject('New User Comment!');
        });
        
        Log::info("Successfully sent email to Admin");
    }
}
