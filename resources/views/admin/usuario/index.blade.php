@extends('layouts.admin.master')
@section('content')



<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="/admin" target="_blank">Dashboard</a>
                <span>/</span>
                <span>Usuarios</span>
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
                                            <th class="th-sm">Correo </th>
                                            <th class="th-sm">Role</th>
                                            <th class="th-sm">Fecha </th>
                                            <th ></th>
                                            <th ></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $k => $user)
                                                <tr>
                                                    <td>{{ $k+1 }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email}}</td>
                                                    <td></td>
                                                    <td>{{ $user->created_at}}</td>
                                                    <td><button type="button" data-id="{{ $user->id }}" class="btn btn-default btn-editar">editar</button></td>
                                                    <td><button type="button" data-id="{{ $user->id }}" class="btn btn-danger  btn-borrar">Borrar</button></td>
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
