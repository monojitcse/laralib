<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>Monojit's Blog</title>
</head>
<body>

    <h1>Welcome to my Blog.</h1>
    
    {{"Hi! there thanks for visiting my site."}}

   
    @foreach($colors as $color)
    <p>The Shirt's color is {{$color}}.</p>
    @endforeach

</body>
</html>
routing::

/*Route::get('/', function()
{
	
	$data = array(
		 'colors' => array('red','blue','black')
		);
	return View::make('index',$data);

*/


	/* $username="monojit";
	$email="monojit.se@gmail.com";
	return View::make('home')->with(array(

		'name'=>$username,
		'email'=>$email

		)); */

/*$user_info=array(

	'name'=>'jeet',
	'email'=>'monojitcse@gmail.com'
	);
	
	return View::make('home',$user_info); */
/*
	$user_info_view = View::make('home');
	$user_info_view->name='abir';
	$user_info_view->email='monojitcse@yahoo.com';
	return $user_info_view;



});

Route::get('/layout', function()
{
	return View::make('layout');
});
*/