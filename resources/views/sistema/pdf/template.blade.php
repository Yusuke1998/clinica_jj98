<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ $title[0] }}</title>
</head>
<style>
	html {
		margin: 0.5px;
		padding: 0.5px;
	}

	h3 {
	  text-align: center;
	  text-transform: uppercase;
	  color: #343A40;
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
	@yield('content')
</body>
</html>