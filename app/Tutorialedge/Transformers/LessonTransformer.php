<?php namespace App\Tutorialedge\Transformers;

class LessonTransformer extends Transformer {
    
    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => $lesson['isLive']  
        ];
    }
    
}