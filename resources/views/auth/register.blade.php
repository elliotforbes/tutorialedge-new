@extends('layouts.app')

@section('title')
Register Now!
@endsection

@section('meta')
<meta name="description" content="Register now for access to hundreds of high quality tutorials.">
@endsection


@section('content')

<div class="gray-container">
    <div class="content">
        <h2>Register Now:</h2>
        <p>Gain access to the forums and comment section and get the latest and greatest articles delivered straight to your inbox.</p>
        <p><b>Track your Progress</b> and follow along the numerous courses available on the site, rate your favourite and help build me build a better site.</p>
    </div>
</div>

<div class="content">
    <h2>Sign Up For Free: </h2>
    <div class="row">
        <br/><br/>
        <form method="POST" action="{{ url('/register') }}" role="form" class="col s12">
        {!! csrf_field() !!}
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Username" name="name" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
            </div>
            <div class="input-field col s12">
            <input id="password" type="password" name="password_confirmation" class="validate">
            <label for="password">Confirm Password</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
                
        </form>
  </div>
</div>


@endsection
