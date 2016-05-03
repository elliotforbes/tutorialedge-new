@extends('beautymail::templates.light')

@section('header')
<h2>TutorialEdge.net Newsletter</h2>
@stop

@section('banner')
<h3>Interesting Points:</h3>
<p></p>
@stop

@section('content')
<h3>Latest Articles:</h3>
<div class="col6">
    <div class="article">
        <div class="image">
            <img src="http://lorempixel.com/g/300/100/" alt="test image">
        </div>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis maxime autem perspiciatis tempore incidunt consectetur, debitis, sunt ullam dignissimos, unde dolore illo doloribus exercitationem necessitatibus aspernatur est nam? Eius.</p>
            <a href="#">Read More</a>
        </div>
    </div>
</div>

<div class="col6">
    <div class="article">
        <div class="image">
            <img src="http://lorempixel.com/g/300/100/" alt="test image">
        </div>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus a aliquid nihil doloremque officia illum dolores sequi repellendus aspernatur aperiam vitae dolore odit cum, quibusdam reiciendis, autem quos ut numquam?</p>
            <a href="#">Read More</a>
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="row">
    <div class="col12">
        <p>Copyright &copy; Light Theme BeautyMail</p>
    </div>

    <div class="col6">
        <h4>Our Offices:</h4>
        <ul>
            <li>123 ABC Avenue</li>
            <li>Office Block 23</li>
            <li>California.</li>
        </ul>
    </div>
    <div class="col6 pull-right">
        <ul>
            <li><a href="#">Check out our Facebook Page</a></li>
            <li><a href="#">Follow us on Twitter</a></li>
            <li><a href="#">Unsubscribe</a></li>
        </ul>
    </div>
</div>
@stop
