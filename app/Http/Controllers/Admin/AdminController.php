<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Log;
use Auth;
use App\Lesson;

class AdminController extends Controller
{
    public function Home()
    {
        $user = Auth::id();
        Log::info('Home Route Successfully Hit on AdminController ');
        Log::info($user);
        return view("admin.index");
    }  
    
    public function Settings()
    {
        return view("admin.settings");
    }
    
    public function Stats()
    {
        return view("admin.stats");
    }
    
    public function test()
    {
        return view('admin.index-new');
    }
    
}
