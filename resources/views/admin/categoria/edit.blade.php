@extends('layouts.admin.master')
@section('content')



<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="/admin">Dashboard</a>
                <span>/</span>
                <span><a href="/admin/categories">Categorias</a></span>
                <span>/</span>
                <span>Editar Categoria</span>
              </h4>

              <form class="d-flex justify-content-center">
                <!-- Default input -->
                <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                <button class="btn btn-primary btn-sm my-0 p" type="submit">
                  <i class="fas fa-search"></i>
                </button>

              </form>

            </div>

          </div>
          <!-- Heading -->

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row justify-content-center mt-5 p-5">
                            <div class="col-md-12">

                                <div class="box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Editar Categoria</h3>
                                        </div>

                                        <div class="box-body">
                                            <div class="row justify-content-center">

                                                <div class="col-md-7">
                                                    <form class="mdb-form" action="/admin/category/{{$category->id}}">

                                                        @csrf
                                                        @method('PUT')
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
