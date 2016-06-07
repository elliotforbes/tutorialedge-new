@extends('layouts.app')

@section('title')
{{ $book->book_name }}
@endsection

@section('meta')
<meta name="description" content="{{ $book->description }}">
@endsection

@section('banner')
<div class="gray-container">
    <div class="content">
        <h1>{{ $book->book_name }} Review</h1>
        
        <div class="info">
            Elliot Forbes
            | {{ date("d M, Y",strtotime($book->created_at)) }}
            
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="content">
    <div class="post-body">
        {!! $book->body !!}    
        
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- article ad -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6782067367590597"
            data-ad-slot="5293007688"
            data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
                
    </div>
</div>
<div class="comment-container">
    <div class="comments">
    @include('frontend.partials._author')
    </div>
    <div class="clear"></div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=emforce"></script>

@endsection