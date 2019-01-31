<!DOCTYPE html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Revista Digital</title>

	<link rel="stylesheet" type="text/css" href="/css/main.css?v={{ uniqid() }}">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

</head>
<body>

<!--inc header-->
@include('layouts.front.partial.header')



@yield('content')



  <!--inc footer-->
  @include('layouts.front.partial.footer')


  <!-- inc scripts-->

  @include('layouts.front.partial.scripts')
</body>
</html>


