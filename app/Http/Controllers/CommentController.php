<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Lesson;
use Auth;
use Log;

class CommentController extends Controller
{
    
    public function index()
    {
        return "Comments";
    }
    
    public function store(Request $request, Lesson $lesson)
    {
        Log::info("Comment Store Method Called");
        $comment = new Comment($request->all());
        $user = Auth::id();
        
        if($user != null){
            $lesson->comments()-save($comment);
            Log::info("Comment Successfully Saved");
            return back();
        }
        
        return back();
        
    }
    
}
