@extends('layouts.app')

@section('title')
All Courses
@endsection

@section('meta')
<meta name="description" content="All Courses">
@endsection

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>All Courses</h1>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    
    @foreach($courses as $course)
    <div class="col s12 m4 l4">
        <div class="course-box">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <span class="card-title">{{ $course->title }}</span>
                <p>{{ $course->description }}</p>
                </div>
                <div class="card-action">
                <a href="{{ url('/course') }}/{{ $course->slug }}">Read Now</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    <?php echo $courses->render() ?>
    
</div>
@endsection