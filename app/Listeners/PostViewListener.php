<?php

namespace App\Listeners;

use App\Events\PostViewEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lesson;
use Log;

class PostViewListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    /**
     * Handle the event.
     *
     * @param  PostViewEvent  $event
     * @return void
     */
    public function handle(PostViewEvent $event)
    {
        Log::info("HIT");
        if ( ! $this->isLessonViewed($lesson) ){
            // Increment the view counter by one...
            $event->lesson->increment('views');

            // Then increment the value on the model so that we can
            // display it. This is because the increment method
            // doesn't increment the value on the model.
            $event->lesson->views += 1; 
            $this->storeLesson($lesson);
        }
    }
    
    public function isLessonViewed($lesson)
    {
        $viewed = $this->session->get('viewed_posts', []);
        
        return in_array($lesson->id, $viewed);
    }
    
    private function storeLesson($lesson)
    {
        $this->session->push('viewed_posts', $lesson->id);
    }
}
