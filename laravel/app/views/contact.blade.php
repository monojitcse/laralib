@extends('layout')
@section('main')
<section class="header header-color">
	<div class="container">
		<div class="page-header">
		<h1>This is Contact of this site.</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, 
			pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
			arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
			Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend 
			ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
			 Aenean imperdiet. Etiam ultricies nisi vel augue. 
		</p>
	 </div>

	</div>
</section>
<section class="contact-form">
	<div class="container">
		{{HTML::ul($errors->all(), array('class'=>'errors'))}}

		{{Form::open(array('url'=>'contact'))}}
		{{Form::label('Name')}}
		{{Form::text('subject', 'Enter your neme here.')}}
		<br><br>
		{{Form::label('Email')}}
		{{Form::text('email', 'Enter your email here.')}}
		<br><br>
		{{Form::label('Message')}}
		{{Form::textarea('message','Enter your message here.')}}
		<br><br>
		{{Form::submit()}}
		{{Form::close()}}
	</div>
</section>

@if(Session::has('success'))
<div class="alert-box success">
    <h2>{{ Session::get('success') }}</h2>
</div>
@endif

@stop