@extends('layouts.admin.master')
@section('content')



<main class="pt-0 mx-lg-5">
        <div class="container-fluid mt-2">

          <!-- Heading -->
          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="/admin/users">Usuarios</a></li>
                  <li class="breadcrumb-item active" aria-current="user">Crear</li>

                </ol>
        </nav>
          <!-- Heading -->

          <!--Grid row-->
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">


                <div class="col-md-12 ">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Crear Usuario</h3>


                        </div>

                        <div class="box-body">

                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        <form class="mdb-form" method="POST" action="/admin/users/store">

                                            @csrf
                                            @method('POST')
                                            @include('admin.usuario.partial.form')
                                        </form>
                                    </div>
                                </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

            </div>
        </div>


        </div>
      </main>



@endsection
