<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ $title[0] }}</title>
</head>
<style>

	html {
		margin: 0px;
		padding: 0px;
	}

	* {
	  box-sizing: border-box;
	  font-family: Arial, Helvetica, sans-serif;
	}

	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}

	h3 {
	  text-align: center;
	  text-transform: uppercase;
	  color: #343A40;
	}

	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.container {
	  background-color: #F8F9FA;
	  padding: 10px;
	}

	.footer {
	  background-color: #343A40;
	  color: #F8F9FA;
	  padding: 10px;
	}

	.header {
	  background-color: #343A40;
	  color: #F8F9FA;
	  padding: 10px;
	}

	.p {
	  text-indent: 50px;
	  text-align: justify;
	  letter-spacing: 3px;
	}

	.a {
	  text-decoration: none;
	  color: #008CBA;
	}

	.div {
	  border: 1px solid gray;
	  padding: 8px;
	}

	.center {
		text-align: center;
	}

	#tabla {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#tabla td, #tabla th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#tabla tr:nth-child(even){background-color: #f2f2f2;}

	#tabla tr:hover {background-color: #ddd;}

	#tabla th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #343A40;
	  color: white;
	}

</style>
<body>
	<header class="header">
		@if(isset($configuracion))
			<p>{{ $configuracion->name }}</p>
		@else
			<p>Sistema Clinico</p>
		@endif
	</header>
	
	@yield('content')

	{{-- <div class="footer">
	  <p>Footer</p>
	</div> --}}
</body>
</html>