@extends('layout')
@section('main')

<section class="header">
	<div class="banner">&nbsp;</div>
	<div class="container">
		<div class="banner-text">
			<marquee behavior="alternate">
			    <img src="{{asset('img/smile.jpg')}}" class="img-responsive img-circle" width="100" height="100" alt="smile" />
			     <h1>UDacademy for Laravel Loving People.</h1>
		   </marquee>
	    </div>
    </div>
</section>

<section class="welcome">
	<div class="jumbotron">
      <div class="container">
		  <h1>Welcome to <span class="test_color">UDacamedy!</span></h1>
		  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>
   </div>
</section>
<section>
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('img/web.jpg')}}" class="img-responsive img-circle" width="200" height="260" alt="Book">
      <div class="caption">
        <h3>Laravel Book</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
      </div>
    </div>
  </div>

    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('img/people.jpg')}}" class="img-responsive img-circle" width="200" height="240" alt="Book">
      <div class="caption">
        <h3>Laravel Book</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
      </div>
    </div>
  </div>

    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('img/setting.jpg')}}" class="img-responsive img-circle" width="200" height="260" alt="Book">
      <div class="caption">
        <h3>Laravel Book</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
      </div>
    </div>
  </div>

</div>
</section>

@stop