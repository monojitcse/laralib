<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is a title!</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	<header id="head_nav" style="background-color: #29AFD6;">
		<nav class="navbar navbar-inverse  navbar-fixed-top">
		    <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://localhost/laravel/public/">UDacademy</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="http://localhost/laravel/public/">Home<span class="sr-only">(current)</span></a></li>
		        <li><a href="http://localhost/laravel/public/about">About</a></li>
		        <li><a href="http://localhost/laravel/public/contact">Contact Us</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->

		    </div><!-- /.container-fluid -->
	    </nav>
    </header>
    
		@yield('main')

	<footer>
		
			<div class="row">
				<div class="footer">
				
					<p>&copy; UD Academy  , All Rights Reserved</p>
				</div>
			</div>
		
	</footer>

		<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
	
</body>
</html>
