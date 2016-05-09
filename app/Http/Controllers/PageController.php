<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Lesson;
use App\Course;
use App\Post;
use App\Tag;
use App;
use Log;
use URL;

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
        // log::info($lesson->tags->get(0));
        $tag = $lesson->tags->get(0);
        
        $articles = Lesson::whereHas('tags', function($q) use ($tag)
                    {
                        // log::info($tag->id);
                        $q->where('tag_id', $tag->id);
                    })
                    ->where('id', '!=', $lesson->id)
                    ->take(2)
                    ->get();
                   
        // log::info($articles);
        return view('frontend.single', compact('lesson', 'articles')); 
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
       
       
       public function sitemap()
       {
           $sitemap = App::make("sitemap");
           
        //    $sitemap->setCache('laravel.sitemap', 60);
           Log::info("Sitemap Route Hit");
        //    if($sitemap->isCached())
        //    {
               Log::info("Sitemap isn't cached, creating new sitemap");
               $sitemap->add(URL::to('/'), '2015-01-01T12:00:00+02:00'  , '1.0', 'daily');
               
               $lessons = Lesson::orderBy('created_at', 'desc')->get()->all();
               
               foreach($lessons as $lesson)
               {
                   Log::info($lesson);
                   $location = URL::to('/') . "/" . $lesson->slug;
                   $sitemap->add($location , $lesson->created_at, '1.0', 'monthly');
               }
        //    }
           
           Log::info($sitemap->render('xml'));
           return $sitemap->render('xml');
       }
    
    
}
