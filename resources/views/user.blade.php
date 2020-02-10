<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>
	<div>
		<ul>
			@foreach($errors->all() as $e)
			<li>{{$e}}</li>
			@endforeach
		</ul>
	</div>
	<form method="POST" action="usercontroller">
		@csrf
		<input type="text" name="user" placeholder="USERNAME"><br><br>
		<input type="text" name="phone" placeholder="PHONE"><br><br>
		<input type="text" name="password" placeholder="PASSWORD"><br><br>
		@error('password')
		<div>
			{{$message}}
		</div>
		@enderror
		<input type="submit" name="submit"><br><br>
		
	</form>

</body>
</html>