<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\User;
use Log;

class EmailController extends Controller
{
    //
    public function test()
    {
        Log::info("Sending Test Email");
        $user = User::findOrFail(1);
        Log::info($user);
        
        Mail::send('emails.light', ['user' => $user], function ($m) use ($user) {
            $m->from("elliot@tutorialedge.net", 'TutorialEdge');
            
            $m->to($user->email, $user->name)->subject('Test Email!');
        });
        
        
        
        Log::info("Successfully sent email to User");
        
        // return view('frontend.profile.index', compact('user'));
    }
}
