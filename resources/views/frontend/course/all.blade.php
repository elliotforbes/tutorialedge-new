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
<div class="container">
    <div class="course-container row">
    @foreach($courses as $course)
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('/uploads/artificial-intelligence.jpg') }}">
                </div>
                <div class="card-content">
                    <h5>{{ $course->title }}</h5>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="card-action">
                <a href="{{ url('/course') }}/{{ $course->slug }}">View Now</a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="break"></div>
        
    <div class="pagination">
        <?php echo $courses->render(); ?>
    </div>
    </div>
</div>
@endsection