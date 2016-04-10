<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;

class LessonsController extends Controller
{
    /**
     * Returns all lessons in database
     * 
     * @return Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        
        return response()->json([
            'data' => $this->transformAll($lessons)
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
            'data' => $this->transform($lesson)
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
    
    /**
    * Transforms our lesson data and only returns the
    * fields we want to return.
    */
    private function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => $lesson['isLive']
        ];
    }
    
    /**
    * Transforms a collection of lessons
    */
    private function transformAll($lessons)
    {
        return array_map([$this, 'transform'], $lessons->toArray());
    }
    
}
