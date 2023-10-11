<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="{{asset('asset/css/style.css')}}"/>
	</head>
	<body>
		<!-- inner container starts here -->
		<div class="innercontainer">
			<!-- logo starts here -->
			<img src="{{asset('asset/images/logo.jpg')}}"/>
			<!-- logo ends here -->
			@if (!request()->routeIs('login'))
			<!-- Logout button starts here -->
			<a href="{{ Route('logout') }}">
				<input type="button" value="Logout" />
			</a>
			<!-- Logout button ends here -->
			@endif
		</div>
				<!-- main container starts here -->
		<div class="maincontainer">
			<!-- inner container2 starts here -->
			<div class="innercontainer2">
				<h3 class="date"></h3>
			</div>
			<!-- inner container2 ends here -->
		</div>
		<!-- main container ends here -->
        