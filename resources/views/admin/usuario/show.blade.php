@extends('layouts.admin.master')
@section('content')
<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="/admin/users">Usuarios</a></li>
                  <li class="breadcrumb-item active" aria-current="user">Perfil</li>
                </ol>
            </nav>
          <!-- Heading -->

          <!--Grid row-->
         <!--Grid row-->
         <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <div class="col-md-12 ">

                                    <!-- Default box -->
                            <div class="box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Perfil Usuario</h3>
                                        </div>

                                <div class="box-body">

                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <strong>Nombre </strong> <p>{{ $user->name }}</p>
                                            <strong>Apellidos </strong> <p>{{ $user->lastname }}</p>
                                            <strong>Punto venta </strong> <p>{{ $user->puntoventa }}</p>
                                            <strong>DNI/EXT </strong> <p>{{ $user->numdocumento }}</p>
                                            <strong>Perfil </strong> <p>{{ $user->perfil }}</p>
                                            <strong>Movil </strong> <p>{{ $user->movil }}</p>
                                            <strong>Email </strong> <p>{{ $user->email }}</p>
                                            <strong>Region </strong> <p>{{ $user->region }}</p>
                                            <strong>Departamento </strong> <p>{{ $user->departamento }}</p>
                                            <strong>Provincia </strong> <p>{{ $user->provincia }}</p>
                                            <strong>Distrito </strong> <p>{{ $user->distrito }}</p>
                                            <strong>Canal </strong> <p>{{ $user->canal }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
              <!--/.Card-->

            </div>

          </div>



        </div>
      </main>



@endsection
