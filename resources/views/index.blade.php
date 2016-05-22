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
        <h1>Learn: Programming</h1>
        <h3>Our Goal is to help new developers land their dream jobs<br/>
by teaching you some of the latest and greatest programming frameworks.</h3>
    </div>
</div>
@endsection

@section('content')

<div class="gray-container">
    <div class="container">
        <div class="row">
            <h4>Courses</h4>
            
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('/uploads/artificial-intelligence.jpg') }}">
                    </div>
                    <div class="card-content">
                        <h5>Artificial Intelligence</h5>
                        <p>Learn everything from Graph Theory to Machine Learning in this introductory course.</p>
                    </div>
                    <div class="card-action">
                    <a href="{{ url('/course') }}/artificial-intelligence">View Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('/uploads/web-security.png') }}">
                        
                    </div>
                    <div class="card-content">
                        <h5>Web Security</h5>
                        <p>Learn some of the most common vulnerabities in websites and how to guard against them.</p>
                    </div>
                    <div class="card-action">
                    <a href="{{ url('/course') }}/introduction-to-web-security">View Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('/uploads/laravel-5.jpg') }}">
                        
                    </div>
                    <div class="card-content">
                        <h5>Laravel 5.2 Fundamentals</h5>
                        <p>In this course we cover the basics for creating a web application using the Laravel 5.2 PHP framework.</p>
                    </div>
                    <div class="card-action">
                    <a href="{{ url('/course') }}/laravel-5">View Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container">
    <div class="course-container row">
        <h4>Tutorials:</h4>
        
        @foreach($lessons as $lesson)
        <div class="col s12 m6 l4">
            <figure class="snip1253">
                <div class="image"><img src="{{ asset('/uploads/') }}/{{ $lesson->image_path }}" alt="sample52"/></div>
                <figcaption>
                    <div class="date"><span class="day">{{ date("d",strtotime($lesson->created_at)) }}</span><span class="month">{{ date("M",strtotime($lesson->created_at)) }}</span></div>
                    <h3>{{ $lesson->title }}</h3>
                    <p>
                        {{ Str::limit($lesson->description, 140) }}
                    </p>
                </figcaption>
                <footer>
                    <div class="views"><i class="ion-eye"></i>{{ $lesson->views }}</div>
                    <!--<div class="love"><i class="ion-heart"></i>623</div>-->
                     </footer><a href="{{url('/') }}/{{ $lesson->slug }}"></a>
            </figure>
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