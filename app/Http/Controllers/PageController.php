<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;

class PageController extends Controller
{
    public function Home()
    {
        return view('index');
    }
    
    public function show($slug)
    {
        $lesson = Lesson::whereSlug($slug)->get()->first();
        
        return view('frontend.single', compact('lesson')); 
    }
    
    
}
