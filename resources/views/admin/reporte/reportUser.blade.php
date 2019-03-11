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

                            <canvas id="myChart"></canvas>


                        </div>
                    </div>

                </div>
              <!--/.Card-->

            </div>

          </div>


        </div>
      </main>



@endsection
