<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Lesson;
use App\User;
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
        
        if(\Auth::check()){
            Log::info(\Auth::user());
            $user = \Auth::user();
            Log::info($user);
        }
        
        Log::info($request->slug);
        $lesson = Lesson::whereSlug($request->slug)->get()->first();
        Log::info($lesson);
        
        $comment->author = $user->email;
   
        if(\Auth::check()){
            $lesson->comments()->save($comment);
            Log::info("Comment Successfully Saved");
            return back();
        }
    
    }
    
}
