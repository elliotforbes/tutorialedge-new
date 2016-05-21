<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Lesson;

class UserController extends Controller
{
    
    public function index()
    {
        $user = User::all();
        return view('admin.user.all', compact('users'));
    }
    
    public function create()
    {
        return view('admin.article.new');
    }
    
    public function edit($slug)
    {
        $lesson = Lesson::whereSlug($slug)->get()->first();
        return view('admin.article.edit', compact('lesson'));
    }
    
}
