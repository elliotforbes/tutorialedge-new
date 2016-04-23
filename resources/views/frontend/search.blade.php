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
            <h1>Search:</h1>
            <div class="input-field">
                <input v-model="query" placeholder="Search Here..." id="first_name2" type="text" class="validate">
            </div>
        </div>
    </div> 

    <div class="content">   
        
       
        
        <div class="search-results">
            <div id="search">
                <h2>Results For: @{{ query }}</h2>
             
                <div v-if="query != ''" v-for="lesson in results.data | filterBy query" class="result">
                    
                    
                    <div class="col s12 m12 l12">
                        <div class="card-panel white">
                        <div class="icon valign-wrapper">
                            <i class="material-icons">description</i>
                        </div>
                        <a href="{{ url('/') }}/@{{ lesson.slug }}">
                        <h5>@{{ lesson.title }}</h5>
                        </a>
                        <span>
                            <b>@{{ lesson.author }}</b>
                            @{{ lesson.description }}
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
        
    </div>
</div>
<script src="{{ asset('/js/search.js?v=123', Request::secure()) }}"></script>

@endsection