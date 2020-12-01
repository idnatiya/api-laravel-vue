<!DOCTYPE html>
<html>

<head>
	<title>LARAVEL VUE</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

	<script type="text/javascript">
		let BASE_API_URL = '{{ url("/api") }}'; 
	</script>

</head>

<body>

	<div id="app"></div>

	<!-- Javascripts -->
	<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>

</html>