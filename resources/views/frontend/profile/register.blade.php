@extends('layouts.app')

@section('content')
<div class="gray-container">
    <div class="content">
        <h1>Register Now</h1>
    </div>
</div>

<div class="content">
    <p>You cannot view the profile page as you are not currently logged in. Please log in or register for an account here: </p>
    
    <h4>Join the Growing Community of Developers</h4>
    
    <p>
        TutorialEdge.net looks to provide the <b>highest quality, most in-depth</b> learning resources online for those wishing to program. 
    </p>
    <div class="center">
        <a href="{{ url('/auth/github') }}"><button class="btn btn-default">+ Register Now</button></a>
        <div class="break"></div>
    </div>
</div>

@endsection