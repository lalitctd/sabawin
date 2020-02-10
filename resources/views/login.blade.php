<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Sabawin</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Particles Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="{{ url('public/login/css') }}/style.css" rel='stylesheet' type='text/css' />
	<!-- online fonts-->
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<!--  particles  -->
	<div id="particles-js"></div>
	<!-- //particles -->
	<div class="w3ls-pos">
		<h1>Sabawin Admin Panel</h1>
		<div class="w3ls-login box">
			<!-- form starts here -->
			 <h3 style="color: white;">{{ session()->pull('status')}}</h3>
			<form action="{{url('admin/post-login')}}" method="post">
				@csrf
				<div class="agile-field-txt">
					<input type="email" name="email" placeholder="info@example.com" required="" />
				  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif 
				</div>
				<div class="agile-field-txt">
					<input type="password" name="password" placeholder="******" required="" id="myInput" />
					 @if ($errors->has('status'))
	                  <span class="error">{{ $errors->first('status') }}</span>
	                  @endif 
					<div class="agile_label">
						<input id="check3" name="check3" type="checkbox" value="show password">
						<label class="check" for="check3">Remember me</label>
					</div>
				</div>
				<div class="w3ls-bot">
					<input type="submit" value="LOGIN">
				</div>
			</form>
		</div>
		<!-- //form ends here -->
		<!--copyright-->
		<div class="copy-wthree">
			<p>© 2020  All Rights Reserved | Design by
				<a href="http://ctdworld.co.in/" target="_blank">CTD World</a>
			</p>
		</div>
		<!--//copyright-->
	</div>

	<!-- scripts required  for particle effect -->
	<script src='{{ url("public/login/js") }}/particles.min.js'></script>
	<script src='{{ url("public/login/js") }}//index.js'></script>
	<!-- //scripts required for particle effect -->
</body>

</html>
