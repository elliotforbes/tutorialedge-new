@extends('layouts.app')

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>{{ $tag->name }}</h1>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($articles as $article)
            <div class="col s12 m12 l12">
                <div class="card-panel white">
                    <div class="icon">
                        E
                    </div>
                    
                    <h5>{{ $article->title }}</h5>
                    <span>
                        <b>{{$article->published_at }}</b>
                        {{ $article->description }}
                    </span>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection