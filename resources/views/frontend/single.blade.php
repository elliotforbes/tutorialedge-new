@extends('layouts.app')

@section('title')
{{ $lesson->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $lesson->description }}">
@endsection

@section('content')

<div class="content">
    <div class="row">
        <div class="col s12 m12 l2">
            <div class="left-sidebar">
                <div class="left-sidebar-content">
                    <img src="https://avatars0.githubusercontent.com/u/3332224?v=3&s=466" alt="">
                    <h2>{!! $lesson->author !!}</h2>
                    <h4>Software Engineer</h4>
                </div>
                <div class="social-links">
                </div>
            </div>
        </div>

        <div class="col s12 m12 l7">            
            <div class="post-body">
                <div class="post-title">
                    <h1>{!! $lesson->title !!}</h1>
                </div>  

                {!! Markdown::parse($lesson->body) !!}                    
            </div><!-- .post-body -->

            <div class="comment-container">
                <div class="comments">
                @include('frontend.partials._comments')
                </div>
                <div class="clear"></div>
            </div>
        </div><!-- .col s9 -->
        
        <div class="sidebar col s12 m12 l3"><!-- .sidebar -->
            @include('frontend.partials._sidebar')
        </div><!-- end of sidebar-->
        
    </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=emforce"></script>

@endsection