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
        
    </div>
</div>
@endsection