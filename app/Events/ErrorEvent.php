<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Log;

class ErrorEvent extends Event
{
    use SerializesModels;
    
    public $error;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($error)
    {
        $this->error = $error;
        Log::info($error);
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
