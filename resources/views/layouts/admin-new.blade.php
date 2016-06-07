<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('/css/admin-new.css') }}"> <!-- Resource style -->
	<script src="{{ asset('/js/modernizr.js') }}"></script> <!-- Modernizr -->
  	
	<title>Responsive Sidebar Navigation | CodyHouse</title>
    
</head>
<body>
	<header class="cd-main-header">
		<a href="{{ url('/') }}" class="cd-logo">TutorialEdge.net</a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="{{ asset('/img/cd-avatar.png') }}" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Main</li>
				<li class="has-children overview">
					<a href="#0">Overview</a>
					
					<ul>
						<li><a href="{{ url('/admin/stats') }}">Statistics</a></li>
						<li><a href="{{ url('/admin/social-stats') }}">Social Stats</a></li>
					</ul>
				</li>
				<li class="has-children notifications">
					<a href="#0">Notifications<span class="count">3</span></a>
					
					<ul>
						<li><a href="#0">New Comments</a></li>
						<li><a href="#0">New Users</a></li>
						<li><a href="#0">New Ratings</a></li>
					</ul>
				</li>
                
                <li class="comments">
					<a href="{{ url('/admin/articles') }}">Articles</a>
				</li>

				<li class="has-children comments">
					<a href="{{ url('/admin/comments') }}">Comments</a>
					
					<ul>
						<li><a href="{{ url('/admin/comments') }}">All Comments</a></li>
						<li><a href="#0">Edit Comment</a></li>
						<li><a href="#0">Delete Comment</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>
				<li class="has-children bookmarks">
					<a href="#0">Tasks</a>
					
					<ul>
						<li><a href="#0">All Bookmarks</a></li>
						<li><a href="#0">Edit Bookmark</a></li>
						<li><a href="#0">Import Bookmark</a></li>
					</ul>
				</li>
				<li class="has-children images">
					<a href="#0">Images</a>
					
					<ul>
						<li><a href="#0">All Images</a></li>
						<li><a href="#0">Edit Image</a></li>
					</ul>
				</li>

				<li class="has-children users">
					<a href="{{ url('/admin/users') }}">Users</a>
					
					<ul>
						<li><a href="{{ url('/admin/users') }}">All Users</a></li>
						<li><a href="#0">Edit User</a></li>
						<li><a href="#0">Add User</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Quick List</li>
				<li class="action-btn"><a href="{{ url('/admin/articles/create') }}">+ New Lesson</a></li>
			</ul>
		</nav>

		<div class="content-wrapper">            
            @yield('content')
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
    
    
    
    
<script src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('/js/jquery.menu-aim.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>