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
    </div>
</div>
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col s12 m8 l8">
            
            
            <div class="post-body">
                {!! $lesson->body !!}    
                
                @include('frontend.partials._ad')
                
                <!--@include('frontend.partials._recommended')-->
                    
                        
            </div><!-- .post-body -->
        </div><!-- .col s9 -->
        
        <div class="sidebar col s12 m4 l4"><!-- .sidebar -->
            
            @include('frontend.partials._sidebar')
            
        </div><!-- end of sidebar-->
        
    </div>
</div>
<div class="comment-container">
    <div class="comments">
    @include('frontend.partials._author')

    @include('frontend.partials._comments')
    </div>
    <div class="clear"></div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=emforce"></script>

@endsection