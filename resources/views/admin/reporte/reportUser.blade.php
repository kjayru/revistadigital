@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="/admin/reports">Reporte</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reporte Usuarios</li>
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
                        <div class="row justify-content-center mt-5 p-5">

                            <!--<canvas id="myChart"></canvas>-->
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Usuario</th>
                                  
                                  <th>IP de acceso</th>
                                  <th>Browser de acceso</th>
                                  <th>Inicio de Sesión</th>

                                </tr>
                              </thead>
                              <tbody>
                              @foreach($sesiones as $ses)  
                                <tr>
                                  <td>{{ $ses->user->name }}</td>
                                  <td>{{ $ses->ip_address }}</td>
                                  <td>{{ $ses->user_agent }}</td>
                                  <td>{{ $ses->last_activity}}</td>
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
