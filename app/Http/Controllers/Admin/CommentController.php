<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.all', compact('comments'));
    }
    
}
