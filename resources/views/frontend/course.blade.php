@extends('layouts.app')

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>{{ $course->title }}</h1>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    
    {{ $course->description }}
    
</div>
@endsection