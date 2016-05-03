<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    //
    public function test()
    {
        return view('emails.light');
    }
}
