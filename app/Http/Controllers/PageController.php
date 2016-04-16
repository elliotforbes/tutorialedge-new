<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;
use App\Course;

class PageController extends Controller
{
    
    /*
     * Home page that displays all lessons
     */
    public function Home()
    {
        $lessons = Lesson::all();
        return view('index', compact('lessons'));
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
         $results = Lesson::paginate(15);
         
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
           return view('frontend.static.blog');
       }
       
       /*
       *
       */
       public function about()
       {
           return view('frontend.static.about');
       }
    
    
    
}
