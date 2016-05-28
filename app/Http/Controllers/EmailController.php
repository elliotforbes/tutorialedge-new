<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\User;
use Event;
use App\Events\ErrorEvent;


class EmailController extends Controller
{
    //
    public function test()
    {
        $error = [
            'type' => '404',
            'name' => 'Illegal Something',
            'body' => 'The stack trace',
        ];
        
        Event::fire(new ErrorEvent($error));
        return "done";
    }
}
