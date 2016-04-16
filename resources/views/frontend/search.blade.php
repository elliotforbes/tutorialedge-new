@extends('layouts.app')

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
        <div class="result">
            <h3>Search Result 1</h3>
            <p>Search Description</p>
        </div>
        
        <?php echo $results->render(); ?>
    </div>
    
</div>

@endsection