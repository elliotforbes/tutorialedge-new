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
        if($request->user()){
            $user = $request->user();
        }
        
        $lesson = Lesson::whereSlug($request->slug)->get()->first();d
        
        $comment->author = User::find($user)->get()->first()->name;
        if(Auth::check()){
            $lesson->comments()->save($comment);
            Log::info("Comment Successfully Saved");
            return back();
        }
    
    }
    
}
