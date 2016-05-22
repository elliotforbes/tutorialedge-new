<!DOCTYPE html>
<html lang="en">
<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Page | TutorialEdge.net</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="google-site-verification" content="o0UedRQqZULbVZPe6SPx1VD1YxJd6WL-2-15-XHWS1g" />
    <meta property="og:site_name" content="TutorialEdge.net" />
    <link rel="author" href="https://plus.google.com/b/115194233692529836662"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/admin-style.css?v=122' , Request::secure() ) }}"/>
</head>
<body>
    
<div class="main-cont">    
    <div id="container">
        <div class="menu">
            <a href="{{ url('/admin') }}" class="snip1452 ion-ios-home-outline"></a>
            <a href="{{ url('/admin/articles') }}" class="snip1452 blue ion-ios-list-outline"></a>
            <a href="{{ url('/admin/users') }}" class="snip1452 ion-ios-people-outline"></a>
            <a href="{{ url('/admin/comments') }}" class="snip1452 ion-ios-chatboxes-outline"></a>
            <a href="{{ url('/admin/stats') }}" class="snip1452 ion-ios-pie-outline"></a>
            <a href="{{ url('/admin/settings') }}" class="snip1452 ion-ios-gear-outline"></a>
        </div>
        
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
    
    

    <script type="text/javascript" src="{{ asset('/js/jquery.min.js', Request::secure()) }}"></script>
    <script type="text/javascript" src="{{ asset('/js/materialize.min.js', Request::secure()) }}"></script>
</body>
</html>