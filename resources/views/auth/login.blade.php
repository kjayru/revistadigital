<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ env('APP_NAME')}} - Login</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/backend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/backend/css/mdb.min.css" rel="stylesheet">

    <link href="/backend/css/main.css" rel="stylesheet">


</head>

<body>

    <main>

        <!--Main layout-->
        <div class="container">
            <!--First row-->
            <div class="row wow fadeIn  justify-content-center" data-wow-delay="0.2s">
                <div class="col-md-6">
                    <!-- Default form login -->
                <form class="text-center border border-light p-5" method="POST"  action="{{ route('login') }}">
                    @csrf
                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword"  placeholder="Clave" class="form-control mb-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif
                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" >
                                <label class="custom-control-label" for="defaultLoginFormRemember">Recordarme</label>
                            </div>
                        </div>

                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Ingresar</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu clave?') }}
                        </a>
                    @endif

                </form>
                <!-- Default form login -->
                </div>
            </div>
            <!--/.First row-->

            <hr class="extra-margins">


        </div>
        <!--/.Main layout-->

    </main>



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="/backend/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="/backend/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/backend/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/backend/js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
