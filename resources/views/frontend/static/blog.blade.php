@extends('layouts.app')

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>Blog</h1>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @foreach($posts as $post)
    <div class="result">
        <h4>{{ $post->title }}</h4>
        <p>
            <strong>{{ $post->author }} posted at: {{ date("d M, Y",strtotime($post->created_at)) }}</strong>
            <br/>{{ $post->description }}
        </p>
        <a href="{{ url('/blog') }}/{{ $post->slug }}">
            <button class="btn waves-effect waves-light" type="submit" name="action">Read Now...
                <i class="material-icons right">send</i>
            </button>
        </a>
    </div>
    @endforeach
</div>
@endsection