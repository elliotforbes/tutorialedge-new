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
        <div class="info">
            {{ $course->author }}
            | {{ date("d M, Y",strtotime($course->created_at)) }}
        </div>
    </div>
</div>

<div class="content">
    <div class="post-body">
        {{ $course->body }}
    </div>
</div>
@endsection