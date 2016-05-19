@extends('layouts.admin')

@section('content')
    @foreach($lessons as $lesson)
        <h1>{{ $lesson->title }}</h1>
    @endforeach
@endsection