@extends('layouts.app')

@section('content')
<div class="gray-container">
    <div class="content">
        <h1>Your Profile: {{ $user->name }}</h1>
    </div>
</div>

<div class="content">
    <p>This is still under construction...</p>
</div>

@endsection