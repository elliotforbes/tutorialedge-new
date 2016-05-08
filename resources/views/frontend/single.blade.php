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
            | Comments: <a href="#comments">{{ count($lesson->comments) }}</a>
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
        
        <div class="recommended-articles">
        </div>
                
    </div>
</div>

<div class="comment-container">
    <div class="comments" id="comments">
        
        @include('frontend.partials._author')
        
        @if (Auth::guest())
         <div class="comment">
            <div class="icon valign-wrapper">
                <i class="material-icons">not_interested</i>
            </div>
            <h5>
                <a href="{{ url('/auth/github') }}">Access Denied</a>
                <span class="time-since">
                    - You need to login or register in order to add your own comments
                </span>
            </h5>
            <p>Register now and get the latest tutorials and courses delivered straight to your mailbox!</p>
            <a href="{{ url('/auth/github') }}">
            <button class="btn waves-effect waves-light">Register with Github
                <i class="material-icons left comment-icon"></i>
            </button>
            </a>
            <div class="clear"></div>
        </div>
        @else
         <div class="comment">

            <form class="col s12" method="POST" action="{{ url('/') }}/comments">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="slug" value="{{ $lesson->slug }}">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="textarea1" class="materialize-textarea" name="body"></textarea>
                        <label for="textarea1">Write Your Own Comment</label>
                        
                         <button class="btn waves-effect waves-light right-align" type="submit" name="action">Submit
                            <i class="material-icons left comment-icon">comment</i>
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="clear"></div>
        </div>
        
        @endif
        @foreach($lesson->comments as $comment)
        <div class="comment">
            <div class="icon valign-wrapper">
                <i class="material-icons">comment</i>
            </div>
            <h5>
                <a href="#">{{ $comment->author }}</a>
                <span class="time-since">
                    - {{ date("d M, Y",strtotime($comment->created_at)) }}
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