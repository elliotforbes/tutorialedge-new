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
        
        <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="https://avatars1.githubusercontent.com/u/3332224?v=3&s=460" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
                <h6><b>Author:</b> Elliot Forbes </h6>
              <span class="black-text">
                I'm a 22 year old Software Engineer currently working for JPMorganChase. If you wish to get in touch then contact me @ admin@tutorialedge.net.
              </span>
            </div>
          </div>
        </div>
      </div>
        
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