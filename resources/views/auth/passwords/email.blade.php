<!DOCTYPE html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Revista Digital</title>

	<link rel="stylesheet" type="text/css" href="/css/main.css">
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


	<footer>
		<div class="container">
			<div class="row pt-3">
				<div class="col-lg-8 col-md-8">
					<span><img src="/assets/logo-claro.svg" class="lg_claro-f"></span> <span class="derechos-reservados">Todos los derechos reservados, Claro 2019</span>
				</div>
				<div class="col-lg-4 col-md-4 text-right">
					<p>
						<a href="http://www.claro.com.pe/" target="_blank" class="enlace_ver">Ir a sitio </a>
						<!--<a href="http://www.claro.com.pe/institucional/" target="_blank" class="enlace_ver">Sitio Institucional</a> /
						<a href="http://www.claro.com.pe/legal-y-regulatorio/" target="_blank" class="enlace_ver">Legal y regulatorio</a> /
						<a href="http://www2.osiptel.gob.pe/Devoluciones/Principal.aspx" target="_blank" class="enlace_ver">Sistema SIRD</a>-->
					</p>
				</div>
				<div class="col-md-12">
					<p style="font-size:12px;">Material no publicitario y de uso exclusivo para fuerza de ventas.</p>
				</div>
			</div>
		</div>
	</footer>


	<script src="/js/jquery-3.3.1.slim.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>

