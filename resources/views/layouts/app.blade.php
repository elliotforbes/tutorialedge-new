<!DOCTYPE html>
<html>
    <head>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>@yield('title') | TutorialEdge.net</title>
        @yield('meta')
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="o0UedRQqZULbVZPe6SPx1VD1YxJd6WL-2-15-XHWS1g" />
		<link rel="author" href="https://plus.google.com/b/115194233692529836662">
		<meta property="og:site_name" content="TutorialEdge.net" />
 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/front-end.css') }}">
        
        
    </head>
    <body>
        
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">THIS NEEDS TO BE ADDED</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                <a href="{{ url('/') }}" class="brand-logo">TutorialEdge.net</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/search') }}">Search</a></li>
                    <li><a href="{{ url('/tutorials') }}">Tutorials</a></li>
                    <li><a class="dropdown-button" href="{{ url('/courses') }}" data-activates="dropdown1">Courses<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="github-signin" href="#">Register With Github</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Register With Github</a></li>
                </ul>
                </div>
            </nav>
        </div>
        
        @yield('banner')
        
        @yield('content')
        
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5>TutorialEdge.net</h5>
                <p class="text-lighten-4">This site is dedicated to bringing you the highest quality courses designed to teach you the ins and outs of programming with various frameworks and programming languages.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5>Links</h5>
                <ul>
                  <li><a class="text-lighten-3" href="{{ url('/contact') }}">Contact</a></li>
                  <li><a class="text-lighten-3" href="{{ url('/blog') }}">Blog</a></li>
                  <li><a class="text-lighten-3" href="{{ url('/about') }}">About</a></li>
                  <li><a class="text-lighten-3" href="{{ url('/advertise') }}">Advertise</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            TutorialEdge © 2016 Copyright 
            </div>
          </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{ asset('/js/prism.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/typed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/site-scripts.js') }}"></script>
    </body>    
</html>