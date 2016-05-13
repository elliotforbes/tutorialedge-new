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
        <link rel="stylesheet" href="{{ asset('/css/pure-min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/admin-style.css' , Request::secure() ) }}">
</head>
<body>
    <div id="sidebar">
        <div id="menu">
            <div class="pure-menu">
                <div class="admin-logo pure-menu-heading">TutorialEdge</div>
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Articles</a></li>
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Users</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="main">
        <div class="pure-g">
            <div class="pure-u-1-2">
                <div class="widget">
                    
                </div>
            </div>
            <div class="pure-u-1-2">
                <div class="widget">
                    
                </div>
            </div>
        </div>
    </div>
        
    
    
   

    <script type="text/javascript" src="{{ asset('/js/jquery.min.js', Request::secure()) }}"></script>
    <script type="text/javascript" src="{{ asset('/js/materialize.min.js', Request::secure()) }}"></script>
</body>
</html>