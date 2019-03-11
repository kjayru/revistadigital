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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/backend/js/vendor/css/quill.css">
  <link rel="stylesheet" href="/backend/js/vendor/css/quill.snow.css">
  <link rel="stylesheet" href="/backend/js/vendor/css/quill.bubble.css">
  
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
