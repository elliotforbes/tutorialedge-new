@extends('layouts.app')

@section('title')
Search the Site
@endsection

@section('meta')
<meta name="description" content="Search the site for high quality programming tutorials...">

@endsection


@section('content')
<div id="search">
    <div class="gray-container search">
        <div class="content">
            <h1>Search Now:</h1>
            <div class="input-field">
                <input placeholder="Search Here..." id="first_name2" type="text" class="validate">
            </div>
        </div>
    </div> 

    <div class="content">   
        
        <h2>Results:</h2>
        
        <div class="search-results">
            <div id="search">
                <div v-for="result in results" class="result">
                    <h4>Under Construction</h4>
                    <p>
                        <strong>Elliot Forbes</strong>
                        <br/>A lot of new features still have to be implemented on the site... This is one of them.
                    </p>
                    <a href="#">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Read Now...
                            <i class="material-icons right">send</i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<script src="{{ asset('/js/search.js', true) }}"></script>

@endsection