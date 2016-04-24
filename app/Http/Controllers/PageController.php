<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Lesson;
use App\Course;
use App\Post;
use App\Tag;

class PageController extends Controller
{
    
    /*
     * Home page that displays all lessons
     */
    public function Home()
    {
        $lessons = DB::table('lessons')->orderBy('created_at', 'desc')->paginate(9);
        $courses = Course::all();
        return view('index', compact('lessons', 'courses'));
    }
    /*
     * Show the an article based of slug passed in.
     * 
     * @return view
     */
    public function show($slug)
    {
        $lesson = Lesson::whereSlug($slug)->get()->first();
        return view('frontend.single', compact('lesson')); 
    }
    
    /*
     * returns paginated results of all tutorials 
     */
    public function allTutorials()
    {
        $lessons = Lesson::paginate(15);
        
        return view('frontend.all', compact('lessons'));
    }
    
    /*
     * returns the search view 
     */
     public function search()
     {
         $results = Lesson::get()->all();
         
         return view('frontend.search', compact('results'));
     }
     
     /*
      * Returns the course page for any courses
      */
      public function course($slug)
      {
          $course = Course::whereSlug($slug)->get()->first();
          
          return view('frontend.course', compact('course'));
      }
      
      /*
      * Returns the course page for any courses
      */
      public function courses()
      {
          $courses = Course::paginate(15);
          
          return view('frontend.course', compact('courses'));
      }
      
      /*
       *
       */
       public function contact()
       {
           return view('frontend.static.contact');
       }
       
       /*
       *
       */
       public function advertise()
       {
           return view('frontend.static.advertise');
       }
       
       /*
       *
       */
       public function blog()
       {
           $posts = Post::orderBy('id', 'DESC')->paginate(15);
           return view('frontend.static.blog', compact('posts'));
       }
       
       /*
       *
       */
       public function blogSingle($slug)
       {
           $post = Post::whereSlug($slug)->get()->first();
           return view('frontend.static.blog-single', compact('post'));
       }
       
       /*
       *
       */
       public function about()
       {
           return view('frontend.static.about');
       }
    
       /*
       *
       */
       public function forum()
       {
           return view('frontend.forum.index');
       }
       
       public function tag($slug)
       {
           $tag = Tag::where('name', '=', $slug)->get()->first();
           
           $articles = $tag->articles;
          
           return view('frontend.tag', compact('tag', 'articles')); 
       }
    
    
}
