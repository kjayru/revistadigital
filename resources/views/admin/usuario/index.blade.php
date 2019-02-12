@extends('layouts.admin.master')
@section('content')
<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
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
                                            <h3 class="box-title">Usuarios</h3>
                                        </div>

                                <div class="box-body">
                                        @can('users.create')
                                        <a href="{{route('users.create')}}" class="btn btn-primary btn-right btn-page-create">Crear</a>
                                        <a href="{{ route('users.carga')}}" class="btn btn-info btn-right mr-2" role="button">Carga masiva</a>
                                        @endcan
                                            <table id="tb-usuarios" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="th-sm">Nombre </th>
                                                    <th>Apellidos</th>
                                                    <th>Punto de venta</th>
                                                    <th>DNI/EXT</th>
                                                    <th>Perfil</th>
                                                    <th>Movil</th>
                                                    

                                                    <th class="th-sm">Correo </th>
                                                    <th>Región</th>
                                                    <th>Canal</th>
                                                   
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
                                                            <td>{{ $user->lastname }}</td>
                                                            <td>{{ $user->puntoventa }}</td>
                                                            <td>{{ $user->numdocumento }}</td>
                                                            <td>{{ $user->perfil}}</td>
                                                            <td>{{ $user->movil}}</td>

                                                            <td>{{ $user->email}}</td>
                                                            <td>{{ $user->region }}</td>
                                                            <td>{{ $user->canal }}</td>
                                                            <td>{{ $user->created_at}}</td>
                                                            <td>

                                                                    @can('users.edit')
                                                                    <a href="{{route('users.edit',$user->id )}}" class="btn btn-success pull-right">Editar</a>
                                                                    @endcan
                                                            </td>
                                                            <td><button type="button" data-id="{{ $user->id }}" class="btn btn-danger  btn-borrar">Borrar</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            {{ $users->links() }}
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
