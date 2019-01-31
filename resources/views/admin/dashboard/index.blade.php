@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!--Grid row-->
          <div class="row wow">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body dashboard">
                        <div class="row justify-content-center mt-5 p-5">
                            <div class="col-xl-3 col-md-6 mb-r">


                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/categories" class="card-link text-center">
                                        <p class="card-text">
                                                <i class="fas fa-th-list fa-5x"></i>
                                        </p>
                                       <p>Categorias</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <a href="/admin/contents" class="card-link text-center">
                                            <p class="card-text">
                                                    <i class="fas fa-cubes fa-5x"></i>
                                            </p>
                                            <p>Tipos de contenido</p>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <a href="/admin/magazines" class="card-link text-center">
                                            <p class="card-text">
                                                    <i class="fas fa-newspaper fa-5x"></i>
                                            </p>
                                            <p>Revista</p>
                                        </a>
                                    </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <a href="/admin/historials" class="card-link text-center">
                                            <p class="card-text">
                                                    <i class="fas fa-history fa-5x"></i>
                                            </p>
                                            <p>Historial de Catalagos</p>
                                        </a>
                                    </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5 p-5">
                                <div class="col-xl-3 col-md-6 mb-r">
                                        <div class="card card-cascade cascading-admin-card p-3 text-center">
                                            <a href="/admin/pages" class="card-link text-center">
                                                <p class="card-text">
                                                        <i class="fas fa-file-alt fa-5x"></i>
                                                </p>
                                                <p>Paginas</p>
                                            </a>
                                        </div>
                                </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <a href="/admin/reports" class="card-link text-center">
                                            <p class="card-text">
                                                    <i class="fas fa-chart-area fa-5x"></i>
                                            </p>
                                            <p>Reportes</p>
                                        </a>
                                    </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/users" class="card-link text-center">
                                        <p class="card-text">
                                                <i class="fas fa-users fa-5x"></i>
                                        </p>
                                       <p>Usuarios</p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">
                                    <a href="/admin/roles" class="card-link text-center">
                                        <p class="card-text">
                                                <i class="fas fa-id-card fa-5x"></i>
                                        </p>
                                        <p>Roles</p>
                                    </a>
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
