@extends('layouts.app')

@section('title')
{{ $course->title }}
@endsection

@section('meta')
<meta name="description" content="{{ $course->description }}">
@endsection

@section('content')
<div class="gray-container">
    <div class="content">
        <h1>{{ $course->title }}</h1>
    </div><!-- .content -->
</div><!-- .gray-container -->

<div class="content">
    <div class="row">
        
        <div class="col s12 m8 l8">
            <div class="post-body">
                {!! $course->body !!}
            </div>
        </div><!-- .col -->
        
        <div class="sidebar col s12 m4 l4"><!-- .sidebar -->
            <div class="course-info">
                <h2>Course Information:</h2>
                <p><b>Author:</b> {{ $course->author }}</p>
                <p><b>Date Published: </b> {{ date("d M, Y",strtotime($course->created_at)) }}</p>
            </div><!-- .info -->
        </div><!-- .sidebar -->
        
    </div><!-- .row -->
</div><!-- .content -->

<div class="gray-container">
    <div class="content">
        @include('frontend.partials._author')
    </div>
</div>

@endsection