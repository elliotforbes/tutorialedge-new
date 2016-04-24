<!DOCTYPE html>
<html lang="en">
<head>
    <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin Page | TutorialEdge.net</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="o0UedRQqZULbVZPe6SPx1VD1YxJd6WL-2-15-XHWS1g" />
		<link rel="author" href="https://plus.google.com/b/115194233692529836662">
		<meta property="og:site_name" content="TutorialEdge.net" />
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/materialize.min.css', Request::secure() )  }}">
        <link rel="stylesheet" href="{{ asset('/css/admin-style.css' , Request::secure() ) }}">
</head>
<body>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ url('/admin/articles') }}">All</a></li>
        <li><a href="{{ url('/admin/articles/create') }}">Create</a></li>
        <li class="divider"></li>
        <li><a href="#!">Edit</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">TutorialEdge Admin</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Articles</a></li>
                <li><a href="badges.html">Components</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Articles<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
    
    
    @yield('content')
   

    <script type="text/javascript" src="{{ asset('/js/jquery.min.js', Request::secure()) }}"></script>
    <script type="text/javascript" src="{{ asset('/js/materialize.min.js', Request::secure()) }}"></script>
</body>
</html>