@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Historial</li>
                </ol>
            </nav>
          <!-- Heading -->

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->

                        <div class="row">

                            <div class="card col-sm-4 col-lg-3">
                                <nav id="bloque1" class="flex-column mt-4">
                                  <a class="navbar-brand" href="#">Filtro</a>
                                  <nav class="nav  flex-column">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productos">
                                        <label class="custom-control-label" for="productos">Productos Moviles</label>
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="olo">
                                        <label class="custom-control-label" for="olo">Olo</label>
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="claro">
                                        <label class="custom-control-label" for="claro">Claro logo</label>
                                    </div>

                                  </nav>
                                </nav>


                                <nav id="bloque2" class="flex-column mt-4">
                                    <a class="navbar-brand" href="#">Mes</a>
                                    <nav class="nav  flex-column">

                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="enero">
                                          <label class="custom-control-label" for="enero">Enero</label>
                                      </div>

                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="febrero">
                                          <label class="custom-control-label" for="febrero">Febrero</label>
                                      </div>

                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="marzo">
                                          <label class="custom-control-label" for="marzo">Marzo</label>
                                      </div>


                                      <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="abril">
                                            <label class="custom-control-label" for="abril">Abril</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="mayo">
                                            <label class="custom-control-label" for="mayo">Mayo</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="junio">
                                            <label class="custom-control-label" for="junio">Junio</label>
                                        </div>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="julio">
                                            <label class="custom-control-label" for="julio">Julio</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="agosto">
                                            <label class="custom-control-label" for="agosto">Agosto</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Setiembre">
                                            <label class="custom-control-label" for="Setiembre">Setiembre</label>
                                        </div>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="octubre">
                                            <label class="custom-control-label" for="octubre">Octubre</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="noviembre">
                                            <label class="custom-control-label" for="noviembre">Noviembre</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="diciembre">
                                            <label class="custom-control-label" for="diciembre">Diciembre</label>
                                        </div>

                                    </nav>
                                  </nav>
                            </div>

                            <div class="card  col-sm-8 col-lg-9">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 mb-r">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <img src="https://via.placeholder.com/150"  class="img-fluid" alt="">
                                                </p>
                                                <a href="/admin/categories" class="card-link text-center">Publicación</a>
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
