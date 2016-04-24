@extends('layouts.app')

@section('title')
{{ $post->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $post->description }}">
@endsection

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>{{ $post->title }}</h1>
    
        <div class="info">
            {{ $post->author }} 
            | {{ date("d M, Y",strtotime($post->created_at)) }}
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="content">
    <div class="post-body">
        {!! $post->body !!}            
    </div>
</div>

<div class="comment-container">
    <div class="comments">
        
       @include('frontend.partials._author')
        
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
        
    </div>
    <div class="clear"></div>
</div>
@endsection