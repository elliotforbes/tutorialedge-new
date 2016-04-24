<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use Auth;
use Log;

class CommentController extends Controller
{
    
    public function index()
    {
        return "Comments";
    }
    
    public function store(Request $request)
    {
        $comment = new Comment($request->all());
        
        $user = Auth::id();
        
        Log::info("Comment Store Method Called");
        Log::info($comment);
        Log::info($request->all());
        Log::info("User: " + $user);
        
    }
    
}
