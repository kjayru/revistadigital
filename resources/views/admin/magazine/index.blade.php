@extends('layouts.admin.master')
@section('content')

<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Revista</li>
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
                        <div class="row justify-content-center p-5" id="pasos-carga">
                           <div class="col-md-12 text-center indicadores">

                               <ul>
                                   <li class="indicador active" id="step1"></li>
                                   <li  class="indicador" id="step2"></li>
                                   <li  class="indicador"></li>
                               </ul>
                           </div>
                            <div class="col-sm-8  step1">
                                <div class="card mt-3 p-4">
                                    <form class="mdb-form" id="paso1">
                                        <p>Paso 1: Selecciona la categoría y fecha del catálogo que deseas añadir o editar.</p>
                                        <div class="form-row mb-4 form-group">
                                            <div class="col-md-4 md-form">
                                                    <select class="form-control" name="categoria" id="categoria" required>
                                                            <option value="">Categoría</option>
                                                           @foreach($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                           @endforeach

                                                    </select>
                                            </div>
                                            <div class="col-md-4 md-form">
                                                    <select class="form-control" name="mes" id="catmes" required>
                                                            <option value="">Mes</option>
                                                           @foreach($months as $mon)
                                                            <option value="{{ $mon }}">{{ $mon}}</option>
                                                           @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-md-4 md-form">
                                                    <select class="form-control" name="year" id="catyear" required>
                                                            <option value="">Año</option>
                                                           @for($i = (int)date("Y")-1; $i<= (int)date("Y"); $i++)
                                                              <option value="{{ $i }}">{{ $i}}</option>
                                                           @endfor
                                                    </select>
                                            </div>


                                        </div>

                                        <div class="md-form text-center">
                                            <input type="submit" class="btn btn-danger btn-step-1" value="Siguiente">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8 step2" style="display:none;">
                                <div class="card mt-3 p-4">
                                    <form class="mdb-form" id="paso2" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="categoria"  id="categoria2" >
                                            <input type="hidden" name="catmes" id="catmes2">
                                            <input type="hidden" name="catyear" id="catyear2">
                                            <input type="hidden" name="_method" value="POST">
                                                <p>Paso 2: Selecciona el tipo de contenido.</p>
                                                <div class="form-row mb-4 form-group">
                                                    <div class="col-md-4 md-form">
                                                            <select class="form-control" name="tipo" id="tipocontenido" required>
                                                                    <option value="" selected>Tipo</option>
                                                                    <option value="1">Video</option>
                                                                    <option value="2">Imagenes</option>
                                                                    <option value="3">PDF</option>
                                                            </select>
                                                    </div>

                                                    <div class="col-md-8 md-form iholder">

                                                    </div>
                                                </div>

                                                <div class="md-form text-center">

                                                    <input type="submit" class="btn btn-danger btn-step-2" value="Siguiente">
                                                </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8 step3" style="display:none;">
                                <div class="card mt-3 p-4">


                                    <div class="md-form text-center">
                                        <a href="/" class="btn btn-danger btn-step-final">Ir a la publicación</a>
                                    </div>

                                </div>
                            </div>

                            <div class="capa">

                                    <div class="text-center cargador">
                                            <p>Paso 3: Espere que la carga de documentos haya sido completada.</p>
                                        <div class="spinner-border text-danger" role="status">
                                        <span class="sr-only">Cargando...</span>
                                    </div>

                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="/admin/categories" class="btn btn-primary">Categorias</a>
                        <a href="/admin/contents" class="btn btn-primary">Contenidos</a>
                    </div>

                </div>
              <!--/.Card-->

            </div>

          </div>


        </div>
      </main>



@endsection
