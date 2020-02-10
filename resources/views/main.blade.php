<!DOCTYPE html>
<html>
<head>
    <title>Form Submit</title>
</head>
<body> 
  	{!! Form::open(['url' => 'form-submit']) !!}
    
    {{  Form::text('name') }}

    {{ Form::submit('Click Me!') }}

	{!! Form::close() !!}

	@error('name')
    <h1 class="alert alert-danger">{{ $message }}</h1>
	@enderror

	
	
</body>
</html>
