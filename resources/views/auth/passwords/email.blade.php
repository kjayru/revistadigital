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


	<header class="fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 no-gutters">
					<nav class="navbar navbar-dark mt-2">
						<a href="#"><img src="/assets/logo-claro.svg" class="lg_claro img-fluid"></a>
					</nav>
				</div>
			</div>
		</div>
	</header>


	<div class="main">

		<section class="login-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mx-auto col-md-6 col-sm-12">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="formulario" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <h2>Olvidé mi contraseña</h2>
                                <p>Ingresa tu e-mail para enviarte una nueva contraseña</p>
                                <div class="content-form">
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-info btn-sm btn-ingresa" style="width: 150px;">Enviar</button>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @include('layouts.front.partial.footer')

	@include('layouts.front.partial.scripts')

</body>
</html>

