<!DOCTYPE html>
<html>
    <head>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/front-end.css') }}">
       
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Developing a Website with Laravel 5.2</a></li>
            <li><a href="#!">Introduction to Website Security</a></li>
            <li class="divider"></li>
            <li><a href="#!">OpenGL Game Programming For Beginners</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                <a href="{{ url('/') }}" class="brand-logo">TutorialEdge.net</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="badges.html">Tutorials</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Courses<i class="material-icons right">arrow_drop_down</i></a></li>
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
                  <li><a class="text-lighten-3" href="#!">Contact Me</a></li>
                  <li><a class="text-lighten-3" href="#!">Blog</a></li>
                  <li><a class="text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="text-lighten-3" href="#!">Advertise Here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{ asset('/js/prism.js') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/typed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/site-scripts.js') }}"></script>
    </body>    
</html>