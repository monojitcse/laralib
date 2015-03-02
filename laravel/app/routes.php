<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{	
/*//create table
	Schema::create('users', function($table){
		$table->increments('id');
		$table->string('username',30);
		$table->string('password',50);
		$table->text('bio');
		$table->integer('age');
		$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
	});*/

	/*//add table coiumn
	Schema::table('members', function($table){
		$table->string('occupation');
	});*/

	/*//dropcolumn
	Schema::table('members', function($table){
		$table->dropcolumn('occupation');
	});*/

	//update table name
	//Schema::rename('members', 'users');

	//delete table
    //Schema::drop('users');

/* //insert data into database...

DB::insert('insert into users(username,password,bio,age) values(?,?,?,?)',
	array('jeet','123','I am not complex.','24' )
	);
//OR
	$user_id = DB::table('users')->insertGetid(array(
	'username' =>'Farzana',
	'password' =>'abc',
	'bio' =>'I am Farzana.',
	'age' =>19
	 ));
echo "Your user id is{$user_id}";
*/

/*//read data from database..
$users = DB::select('select * from users');
foreach ($users as $user) {
	echo $user->username.'<br>';
	echo $user->password.'<br>';
	echo $user->bio.'<br>';
	echo $user->age.'<br>';
}
*/

/*//update data from database..
$row_affected =DB::update('update users set bio=?,age=23 where id=?', array('Hi! i am abir from Satkhira.',3) );
echo $row_affected;*/

/*//Delete data from database..
$row_affected =DB::delete('delete from users where id=?', array(4) );
echo $row_affected;
*/


	return View::make('index');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/contact', function()
{
	return View::make('contact');
});


Route::post('contact', function()
{	
	$data = Input::all();
	$checking_rules = array(
		'subject' => 'required',
		'email' => 'required',
		'message' => 'required' 
		);
	$validation = Validator:: make($data, $checking_rules);
	if($validation -> fails()){
		//if validation fails then we redirect the user to contact page with errors.
		return Redirect::to('contact')
						->withErrors($validation)
						->withInput();
	}

	//sending Email//
	//geting data from subject and message input.
	$emailcontent = array(
		'subject' => $data['subject'],
		'email' => $data['email'],
		'body' => $data['message']
		);


	Mail::send('emails.contactemail', $emailcontent, function($message)
	{
		$message->to('monojit.se@gmail.com', 'Monojit Kumar')->subject('Welcome Laravel!');
	});


	//if no error found, then redirect the success message.
	$success ='send';
	return Redirect::to('contact')
					->with('success','The message was successfully send!');
				
					
});


