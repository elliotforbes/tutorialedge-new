@extends('layouts.app')

@section('title')
{{ $lesson->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $lesson->description }}">
@endsection

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>{{ $lesson->title }}</h1>
        
        <div class="info">
            Elliot Forbes
            | {{ date("d M, Y",strtotime($lesson->created_at)) }}
            | Tags: 
            @foreach ($lesson->tags as $tag)
                <a href="{{ url('/tag') }}/{{ $tag->name }}">
                    <div class="chip">
                        {{ $tag->name }}
                    </div>    
                </a>
            @endforeach
        </div>
        
    </div>
</div>
@endsection

@section('content')

<div class="content">
    <div class="post-body">
        {!! $lesson->body !!}            
    </div>
</div>

<div class="comment-container">
    <div class="comments">
        
        <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="https://avatars1.githubusercontent.com/u/3332224?v=3&s=460" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
                <h6><b>Author:</b> {{ $lesson->author }}</h6>
              <span class="black-text">
                I'm a 22 year old Software Engineer currently working for JPMorganChase. If you wish to get in touch then contact me @ admin@tutorialedge.net.
              </span>
            </div>
          </div>
        </div>
      </div>
        
        @if (Auth::guest())
         <div class="comment">
            <div class="icon valign-wrapper">
                <i class="material-icons">not_interested</i>
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
            <div class="icon valign-wrapper">
                <i class="material-icons">not_interested</i>
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