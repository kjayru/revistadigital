@extends('layouts.admin.master')
@section('content')



<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <div class="card mb-4 wow">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h4 class="mb-2 mb-sm-0 pt-1">


                <span>Dashboard</span>
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
          <div class="row wow">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row justify-content-center mt-5 p-5">
                            <div class="col-xl-3 col-md-6 mb-r">


                                <div class="card card-cascade cascading-admin-card p-3 text-center">

                                        <p class="card-text">
                                        <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                        </p>
                                        <a href="/admin/categories" class="card-link text-center">Categorias</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                            <p class="card-text">
                                                    <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                            </p>
                                            <a href="/admin/contents" class="card-link text-center">Tipos de contenido</a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                        </p>
                                        <a href="/admin/magazines" class="card-link text-center">Revista</a>
                                    </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">
                                        <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                        </p>
                                        <a href="/admin/historials" class="card-link text-center">Historial de Catalagos</a>
                                    </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5 p-5">
                                <div class="col-xl-3 col-md-6 mb-r">
                                        <div class="card card-cascade cascading-admin-card p-3 text-center">

                                                <p class="card-text">
                                                        <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/pages" class="card-link text-center">Paginas</a>
                                        </div>
                                </div>
                            <div class="col-xl-3 col-md-6 mb-r">
                                    <div class="card card-cascade cascading-admin-card p-3 text-center">

                                            <p class="card-text">
                                                    <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                            </p>
                                            <a href="/admin/reports" class="card-link text-center">Reportes</a>
                                    </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">

                                        <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                        </p>
                                        <a href="/admin/users" class="card-link text-center">Usuarios</a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-r">
                                <div class="card card-cascade cascading-admin-card p-3 text-center">

                                        <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                        </p>
                                        <a href="/admin/roles" class="card-link text-center">Roles</a>
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
