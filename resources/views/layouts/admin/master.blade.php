<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/backend/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/backend/css/style.min.css?v=1" rel="stylesheet">

  <link href="/backend/css/main.css" rel="stylesheet">
</head>
<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    @include('layouts.admin.partial.navigation')

    @include('layouts.admin.partial.sidebar')

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  @yield('content')
  <!--Main layout-->

  <!--Footer-->
    @include('layouts.admin.partial.footer')
  <!--/.Footer-->

  <!-- SCRIPTS -->
  @include('layouts.admin.partial.scripts')



</body>

</html>
