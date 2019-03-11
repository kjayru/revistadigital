@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reporte</li>
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

                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/reports/users" class="card-link text-center">
                                        <p class="card-text">
                                           
                                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                        </p>
                                       <p>Usuarios</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/reports/categories" class="card-link text-center">
                                        <p class="card-text">
                                                <i class="fas fa-th-list fa-5x"></i>
                                        </p>
                                       <p>Categorias</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/reports/label" class="card-link text-center">
                                        <p class="card-text">
                                            <i class="fa fa-tags fa-5x" aria-hidden="true"></i>
                                        </p>
                                       <p>Etiquetas</p>
                                    </a>
                                </div>
                            </div>
                            <!--<canvas id="myChart"></canvas>-->


                        </div>
                    </div>

                </div>
              <!--/.Card-->

            </div>

          </div>


        </div>
      </main>



@endsection
