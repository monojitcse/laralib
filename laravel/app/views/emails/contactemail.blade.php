<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>
	<h2>This email is send by using Laravel.</h2>
	<div>
		<h2>Here is your email details.</h2>
	</div>
	<div>
		<p><b>Name :</b> {{ $subject}}</p>
		<p><b>Email of your Email:</b> {{ $email}}</p>
		<p><b>Body of your Email:</b> {{ $body}}</p>
	</div>
</body>
</html>