@extends('layouts.app')

@section('title')
Search the Site
@endsection

@section('meta')
<meta name="description" content="Search the site for high quality programming tutorials...">
@endsection

@section('banner')
<div class="gray-container search">
    <div class="content">
        <h1>Search Now:</h1>
        
        <div class="input-field">
            <input placeholder="Search Here..." id="first_name2" type="text" class="validate">
        </div>
    </div>
</div> 
@endsection

@section('content')

<div class="content">   
    
    <h2>Results:</h2>
    
    <div class="search-results">
        @foreach($results as $result)
        <div class="result">
            <h4>{{ $result->title }}</h4>
            <p>
                <strong>{{ $result->author }} resulted at: {{ date("d M, Y",strtotime($result->created_at)) }}</strong>
                <br/>{{ $result->description }}
            </p>
            <a href="{{ url('/blog') }}/{{ $result->slug }}">
                <button class="btn waves-effect waves-light" type="submit" name="action">Read Now...
                    <i class="material-icons right">send</i>
                </button>
            </a>
        </div>
        @endforeach
            
        <?php echo $results->render(); ?>
    </div>
    
</div>

@endsection