@extends('layouts.app')

@section('title')
The Forum
@endsection

@section('meta')
<meta name="description" content="Forum Homepage">
@endsection

@section('content')
<div class="content">
    <h2>Forum Home</h2>
    <p>Got any questions or suggestions for the site? Post them hear and let me know what I can do to improve the site!</p>
</div>
<div class="gray-container">
    <div class="content">
        <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel white">
            <div class="icon valign-wrapper">
                <span class="valign">E</span>
            </div>
            <h5>Forum Post Title</h5>
            <span>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
            </span>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection