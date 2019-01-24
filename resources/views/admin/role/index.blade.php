@extends('layouts.admin.master')
@section('content')


<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h5 class="mb-2 mb-sm-0 pt-1">
                <a href="/admin">Dashboard</a>
                <span>/</span>
                <span>Roles</span>
              </h5>

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
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">


                <div class="col-md-12 ">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">REGISTRO DE ROLES</h3>


                        </div>
                        <div class="box-body">
                                @can('podcasts.create')
                                    <a href="{{route('roles.create')}}" class="btn btn-primary pull-right">Crear</a>
                                @endcan

                            <table class="table table-striped table-hover">
                                <thead>
                                    <th width="10">ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Descripción</th>

                                    <th colspan="3"></th>
                                </thead>
                                <tbody>
                                    @foreach($roles as $key => $rol)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{ $rol->name }}</td>
                                            <td>{{ $rol->slug }}</td>
                                            <td>{{ $rol->description }}</td>


                                            <td width="15">
                                                    @can('roles.edit')
                                                    <a href="{{route('roles.edit',$rol->id )}}" class="btn btn-success pull-right">Editar</a>
                                                    @endcan
                                            </td>
                                            <td width="10">
                                                    @can('roles.destroy')

                                                        <form action="{{ route('roles.destroy',$rol->id ) }}" method="POST">
                                                            <input type="hidden" name="_method" value="delete" >
                                                            <input type="submit" value="borrar" class="btn btn-danger"/>
                                                            @csrf
                                                        </form>
                                                    @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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
