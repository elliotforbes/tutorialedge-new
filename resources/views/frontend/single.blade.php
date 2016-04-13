@extends('layouts.app')

@section('content')

<div class="content">
    <h1>{{ $lesson->title }}</h1>
    
    <div class="info">
        {{ $lesson->author }} | {{ date("d M, Y",strtotime($lesson->created_at)) }} | 3 Comments | Tags: Laravel, Authentication, Golang
    </div>
    
    <div class="post-body">
        {{ $lesson->body }}
            
    </div>
</div>

<div class="comment-container">
    <div class="comments">
        
        <div class="comment">
            <div class="icon">
                E
            </div>
            <h5>
                <a href="#">Elliot</a>
                <span class="time-since">
                    - 3 Hours Ago
                </span>
            </h5>
            <p>One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens. To see Flow Text in action, slowly resize your browser and watch the size of this text body change! Use the button above to toggle off/on flow-text to see the difference!</p>
            <div class="clear"></div>
        </div>
        
    </div>
    <div class="clear"></div>
</div>
@endsection