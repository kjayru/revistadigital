@extends('layouts.front.appauth')
@section('content')


	<div class="main">

		<section class="login-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mx-auto col-md-6 col-sm-12">

                        <form class="formulario" method="POST" action="{{ route('login') }}">
                            @csrf
							<h2>Bienvenido a <strong>MKT</strong> <span>Claro</span></h2>
							<p>Inicia sesión para visualizar el contenido</p>
							<div class="content-form">
								<div class="form-group">

                                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
								</div>
								<div class="form-group">

									<input type="password" id="defaultLoginFormPassword"  placeholder="Contraseña" class="form-control mb-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
								</div>


								<button class="btn btn-primary btn-info btn-sm btn-ingresa" type="submit" style="width: 150px;">Ingresar</button>
                                @if (Route::has('password.request'))
                                <a class="enlace_ver" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu clave?') }}
                                </a>
                            @endif

                            </div>

						</form>



                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
