@extends('layouts.admin.master')
@section('content')



<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h5 class="mb-2 mb-sm-0 pt-1">
                <a href="/admin">Dashboard</a>
                <span>/</span>
                <span>Editar Catálogo</span>
              </h5>


              <form class="d-flex justify-content-center">
                <!-- Default input -->

                <a href="/admin/categories/create" class="btn btn-primary btn-sm my-0 p btn-category-create"  type="button">
                  Crear Categoria
                </a>

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

                                    <table id="tb-categories" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th class="th-sm">Nombre </th>
                                            <th class="th-sm">Slug </th>
                                            <th class="th-sm">Fecha </th>
                                            <th ></th>
                                            <th ></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $k => $cat)
                                                <tr>
                                                    <td>{{ $k+1 }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>{{ $cat->slug}}</td>
                                                    <td>{{ $cat->updated_at}}</td>
                                                    <td><a href="/admin/categories/{{ $cat->id }}/edit" class="btn btn-default btn-editar">editar</a></td>
                                                    <td><a href="/admin/categories/delete"   class="btn btn-danger  btn-borrar">Borrar</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                        </div>
                    </div>

                </div>
              <!--/.Card-->

            </div>

          </div>


        </div>
      </main>



@endsection
