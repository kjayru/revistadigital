@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="/admin/categories">Categorias</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear Categoría</li>
                </ol>
            </nav>
          <!-- Heading -->

          <!--Grid row-->
          <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <div class="row justify-content-center">
                            <div class="col-md-12">

                                <div class="box">
                                        <div class="box-header with-border">
                                            <h3>Crear Categoria</h3>
                                            <p></p>
                                        </div>

                                        <div class="box-body">
                                            <div class="row justify-content-center">

                                                <div class="col-md-7">
                                                    <form class="mdb-form" method="POST" action="/admin/categories/store" enctype="multipart/form-data">

                                                        @csrf
                                                        @method('POST')
                                                        @include('admin.categoria.partial.form')
                                                    </form>
                                                </div>

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
