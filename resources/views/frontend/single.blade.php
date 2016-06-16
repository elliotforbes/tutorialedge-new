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
            <div class="info">
                Elliot Forbes
                | {{ date("d M, Y",strtotime($lesson->created_at)) }}
                | Comments: <a href="#comments">{{ count($lesson->comments) }}</a>
                | Views: {{ $lesson->views }}
                
                
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
            </div><!-- .info. -->
            
            <div class="post-body">
                {!! $lesson->body !!}    
                
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- article ad -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-6782067367590597"
                    data-ad-slot="5293007688"
                    data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                
                <!--@include('frontend.partials._recommended')-->
                    
                        
            </div><!-- .post-body -->
        </div><!-- .col s9 -->
        
        <div class="sidebar col s12 m4 l4"><!-- .sidebar -->
            <div class="course-info"><!-- .course-info -->
                <h2>Course Information</h2>
                <p>This course teaches a lot of things based on this course subject matter.</p>    
                
                 <h5>Tags:</h5>
                @foreach ($lesson->tags as $tag)
                    <a href="{{ url('/tag') }}/{{ $tag->name }}">
                        <div class="chip">
                            {{ $tag->name }}
                        </div>    
                    </a>
                @endforeach
                        
            </div><!-- .course-info -->
            
            <div class="register"><!-- .register -->
                <h2>Register Now:</h2>
                
                <p>Register now for free quickly using your preferred social media platform and receive the latest tutorials and updates straight to your inbox.</p>
                
                <div class="row">
                    <div class="col s12 m6 l6">
                        <button class="register-btn facebook"><i class="fa fa-facebook-square"></i> Facebook</button>
                        <button class="register-btn github"><i class="fa fa-github-square"></i> Github</button>
                    </div>
                    <div class="col s12 m6 l6">
                        <button class="register-btn twitter"><i class="fa fa-twitter-square"></i> Twitter</button>
                        <button class="register-btn google-plus"><i class="fa fa-google-plus-square"></i> Google+</button>
                    </div>
                </div>
            </div><!-- .register -->
            
            <div class="ad"><!-- .ad -->
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- article ad -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-6782067367590597"
                    data-ad-slot="5293007688"
                    data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> <!-- .ad -->
            
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