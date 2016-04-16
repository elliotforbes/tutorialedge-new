@extends('layouts.app')

@section('title')
All Tutorials
@endsection

@section('meta')
<meta name="description" content="All Tutorials">
@endsection

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>All Tutorials</h1>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    
    @foreach($lessons as $lesson)
    <div class="col s12 m4 l4">
        <div class="course-box">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <span class="card-title">{{ $lesson->title }}</span>
                <p>{{ $lesson->description }}</p>
                </div>
                <div class="card-action">
                <a href="{{ url('/') }}/{{ $lesson->slug }}">Read Now</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <?php echo $lessons->render() ?>
    
</div>
@endsection