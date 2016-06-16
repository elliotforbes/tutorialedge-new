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
            
            @if($lesson->course_id != 0)
            <div class="course-info">
                <h2>{{ $course->title }}:</h2>
                <table class="striped">
                    <tbody>
                        @foreach($course->lessons as $course_lesson)
                        <tr>
                            <td><a href="{{ url('/') }}/{{ $course_lesson->slug }}">{{ $course_lesson->title }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                            </div>
            @endif
        
            <div class="post-info">
                <h2>Post Info:</h2>
                <div class="info"><!-- .info -->
                    <p><b>Author:</b> Elliot Forbes</p>
                    <p><b>Date Posted:</b> {{ date("d M, Y",strtotime($lesson->created_at)) }}</p>
                    <p><b>Comments:</b> <a href="#comments">{{ count($lesson->comments) }}</a></p>
                    <p><b>Views:</b> {{ $lesson->views }}</p>
                    
                </div><!-- .info. -->
            </div>
            
            <div class="course-info"><!-- .course-info -->
                <h5>Tags:</h5>
                @foreach ($lesson->tags as $tag)
                    <a href="{{ url('/tag') }}/{{ $tag->name }}">
                        <div class="chip">
                            {{ $tag->name }}
                        </div>    
                    </a>
                @endforeach
               
                <h5>Share This Post:</h5>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
                        
            </div><!-- .course-info -->
            
            <div class="register"><!-- .register -->
                <h2>Register Now:</h2>
                
                <p>Register now for free quickly using your preferred social media platform and receive the latest tutorials and updates straight to your inbox.</p>
                
                <div class="row">
                    <!--<div class="col s12 m6 l6">
                        <a href="{{ url('/auth/facebook') }}"><button class="register-btn facebook"><i class="fa fa-facebook-square"></i> Facebook</button></a>
                    </div>
                    <div class="col s12 m6 l6">
                        <a href="{{ url('/auth/twitter') }}"><button class="register-btn twitter"><i class="fa fa-twitter-square"></i> Twitter</button></a>
                        <a href="{{ url('/auth/googleplus') }}"><button class="register-btn google-plus"><i class="fa fa-google-plus-square"></i> Google+</button></a>
                    </div>-->
                    <a href="{{ url('/auth/github') }}"><button class="register-btn github"><i class="fa fa-github-square"></i> Github</button></a>
                </div>
            </div><!-- .register -->
            
            <div class="ad"><!-- .ad -->
                <h2>Sponsor Us:</h2>
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
                
                 <p>Want to see your own advertisement here, check out the <a href="{{ url('/contact') }}">contact page</a></p>
                
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