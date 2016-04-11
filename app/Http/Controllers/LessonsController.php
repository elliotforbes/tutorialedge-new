<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;

use App\Tutorialedge\Transformers\LessonTransformer;

class LessonsController extends ApiController
{
    
    protected $lessonTransformer;
    
    function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;   
    }
    
    /**
     * Returns all lessons in database
     * 
     * @return Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        
        return response()->json([
            'data' => $this->lessonTransformer->transformCollection($lessons->all())
        ], 200);
    }
    
    /*
     * 
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        
        if ( ! $lesson)
        {
            return response()->json([
                'error' => [
                    'message' => 'Lesson does not exist'
                ]
            ], 404);
        }
        
        return response()->json([
            'data' => $this->lessonTransformer->transform($lesson)
        ], 200);
    }
    
    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $lesson = new Lesson;
        $input = Request::all();
        $lesson->fill($input)->save();
        return Lesson::all();
	}
   
    
}
