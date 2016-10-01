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

                    <p>23 Year old Software Engineer who loves all manner of front end programing.</p>
                </div>
                <div class="social-links">
                    <h4>Follow Me</h4>
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <div class="twitter">
                                <a href="https://twitter.com/Elliot_F"><i class="ion ion-social-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="facebook">
                                <a href="https://www.facebook.com/tutorialedge"><i class="ion ion-social-facebook"></i></a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="github">
                                <a href="https://github.com/emforce"><i class="ion ion-social-github"></i></a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="youtube">
                                <a href="https://www.youtube.com/channel/UCwFl9Y49sWChrddQTD9QhRA"><i class="ion ion-social-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l7">
            <!--<div class="post-image">
                <img src="{{ asset('/uploads/') }}/{{ $lesson->image_path }}" alt="">
            </div>-->            
            <div class="post-body">

                <div class="post-title">
                    <h1>{!! $lesson->title !!}</h1>
                </div>  
                

                <div class="clear"></div>


                {!! Markdown::parse($lesson->body) !!}                    
            </div><!-- .post-body -->

            <div id="comments" class="comment-container">
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