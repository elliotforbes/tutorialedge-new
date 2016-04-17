@extends('layouts.app')

@section('title')
{{ $lesson->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $lesson->description }}">
@endsection

@section('content')

<div class="content">
    <h1>{{ $lesson->title }}</h1>
    
    <div class="info">
        {{ $lesson->author }} 
        | {{ date("d M, Y",strtotime($lesson->created_at)) }}
        | Tags: 
        @foreach ($lesson->tags as $tag)
            @if (count($lesson->tags) > 1)
               / {{ $tag->name }} 
            @else 
                {{ $tag->name }}
            @endif
        @endforeach
    </div>
    
    <div class="post-body">
        {!! $lesson->body !!}
            
    </div>
</div>

<div class="comment-container">
    <div class="comments">
        
        @if (Auth::guest())
         <div class="comment">
            <div class="icon">
                !
            </div>
            <h5>
                <a href="#">Access Denied</a>
                <span class="time-since">
                    - You need to login or register in order to add your own comments
                </span>
            </h5>
            <p>Register now and get the latest tutorials and courses delivered straight to your mailbox! 
            <div class="clear"></div>
        </div>
        @else
         <div class="comment">
            
            <div class="clear"></div>
        </div>
        
        @endif
        @foreach($lesson->comments as $comment)
        <div class="comment">
            <div class="icon">
                E
            </div>
            <h5>
                <a href="#">{{ $comment->author }}</a>
                <span class="time-since">
                    - {{ date("d M, Y",strtotime($lesson->created_at)) }} @ {{ date("h:m", strtotime($lesson->created_at)) }}
                </span>
            </h5>
            <p>{{ $comment->body }}</p>
            <div class="clear"></div>
        </div>
        @endforeach
        
    </div>
    <div class="clear"></div>
</div>
@endsection