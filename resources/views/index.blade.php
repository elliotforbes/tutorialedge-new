@extends('layouts.app')

@section('title')
The Home of High Quality Programming Tutorials
@endsection

@section('meta')
<meta name="description" content="A Game Development Tutorial site focused on bringing you high quality programming courses...">
@endsection

@section('banner')
<div class="banner">
    <div class="banner-cont">
        <h1>Learn: Laravel 5</h1>
        <h3>Our Goal is to help new developers land their dream jobs<br/>
by teaching you some of the latest and greatest programming frameworks.</h3>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="course-container row">
        
        @foreach($lessons as $lesson)
        <div class="col s12 m6 l4">
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
        
        <div class="break"></div>
        
        <div class="pagination">
            <?php echo $lessons->render(); ?>
        </div>
    </div>
</div>

<div class="gray-container">
    <div class="container">
        <div class="row">

        <div class="col s12 m6 l4 promo">
            <i class="material-icons">flash_on</i>
            <h5>Learn the latest and greatest frameworks</h5>
            <p>Follow our courses and learn how to use the latest frameworks whilst developing your own applications and websites.</p>
        </div>
        <div class="col s12 m6 l4 promo">
            <i class="material-icons">group</i>
            <h5>Join the Community</h5>
            <p>Participate in a discussion about your favourite tools and new packages or ask for advice on how to tackle a specific programming challenge on our new forums.</p>
        </div>
        <div class="col s12 m6 l4 promo">
            <i class="material-icons">trending_up</i>
            <h5>Level up your development skills</h5>
            <p>Learn new programming skills that could ultimately seal you your dream job.</p>
        </div>

        </div>
    </div>
</div>

<div class="clear"></div>

@endsection