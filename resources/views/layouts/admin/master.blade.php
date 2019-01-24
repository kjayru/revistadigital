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
<link href="/backend/css/mdb.min.css?v=3" rel="stylesheet">

<!--
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">-->
  <!-- Your custom styles (optional) -->
  <link href="/backend/css/style.min.css?v=1" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

  <link href="/backend/css/main.css?v={{ uniqid() }}" rel="stylesheet">
</head>
<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    @include('layouts.admin.partial.navigation')



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
