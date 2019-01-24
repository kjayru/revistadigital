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
                <span>Revista</span>
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

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row justify-content-center mt-5 p-5">
                           <div class="col-md-12 text-center indicadores">

                               <ul>
                                   <li class="indicador active"></li>
                                   <li  class="indicador"></li>
                                   <li  class="indicador"></li>
                               </ul>
                           </div>
                            <div class="col-sm-8  step1">
                                <div class="card mt-3 p-4">
                                    <form class="mdb-form" >
                                        <p>Paso 1: Selecciona la categoría y fecha del catálogo que deseas añadir o editar.</p>
                                        <div class="form-row mb-4 form-group">
                                            <div class="col-md-4 md-form">
                                                    <select class="mdb-select md-form">
                                                            <option value="" disabled selected>Categoría</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4 md-form">
                                                    <select class="mdb-select md-form">
                                                            <option value="" disabled selected>Mes</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4 md-form">
                                                    <select class="mdb-select md-form">
                                                            <option value="" disabled selected>Año</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                    </select>
                                            </div>


                                        </div>

                                        <div class="md-form text-center">
                                            <a href="#" class="btn btn-danger btn-step-1">Siguiente</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8 step2" style="display:none;">
                                <div class="card mt-3 p-4">
                                    <form class="mdb-form" >
                                                <p>Paso 2: Selecciona el tipo de contenido.</p>
                                                <div class="form-row mb-4 form-group">
                                                    <div class="col-md-4 md-form">
                                                            <select class="mdb-select md-form">
                                                                    <option value="" disabled selected>Categoría</option>
                                                                    <option value="1">Option 1</option>
                                                                    <option value="2">Option 2</option>
                                                                    <option value="3">Option 3</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-4 md-form">
                                                            <select class="mdb-select md-form">
                                                                    <option value="" disabled selected>Mes</option>
                                                                    <option value="1">Option 1</option>
                                                                    <option value="2">Option 2</option>
                                                                    <option value="3">Option 3</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-4 md-form">
                                                            <select class="mdb-select md-form">
                                                                    <option value="" disabled selected>Año</option>
                                                                    <option value="1">Option 1</option>
                                                                    <option value="2">Option 2</option>
                                                                    <option value="3">Option 3</option>
                                                            </select>
                                                    </div>


                                                </div>

                                                <div class="md-form text-center">
                                                    <a href="#" class="btn btn-danger btn-step-2">Siguiente</a>
                                                </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8 step3" style="display:none;">
                                <div class="card mt-3 p-4">
                                    <p>Paso 3: Espere que la carga de documentos haya sido completada.</p>
                                    <div class="form-row mb-4 form-group">
                                        <div class="contador"></div>
                                    </div>
                                    <div class="md-form text-center">
                                        <a href="#" class="btn btn-danger btn-step-final">Finalizar</a>
                                    </div>

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
