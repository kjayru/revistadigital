@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="/admin/users">usuarios</a></li>
                  <li class="breadcrumb-item active" aria-current="user">Editar</li>

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
                            <h3 class="box-title">Carga Masiva</h3>
                        </div>

                        <div class="box-body">

                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <form  method="POST" action="/admin/proceso" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                         <div class="form-group">
                                             <label for="archivo">Cargue el archivos</label>
                                             <input type="file" class="form-control-file" id="archivo" name="archivo">
                                         </div>
                                         <div class="form-group text-center">

                                            <button class="btn btn-danger" type="submit">Procesar</button>
                                         </div>
                                    </form>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.box -->

                </div>

            </div>
        </div>


        </div>
      </main>



@endsection
