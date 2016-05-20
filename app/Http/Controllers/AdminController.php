<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use Auth;

class AdminController extends Controller
{
    public function Home()
    {
        $user = Auth::id();
        Log::info('Home Route Successfully Hit on AdminController ');
        Log::info($user);
        return view("admin.index");
    }  
    
}
