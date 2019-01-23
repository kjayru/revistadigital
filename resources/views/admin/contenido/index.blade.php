@extends('layouts.admin.master')
@section('content')



<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

              <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="/admin" target="_blank">Dashboard</a>
                <span>/</span>
                <span>Tipos de contenido</span>
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
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 p-2">
                            <div class="tree col-md-2">

                                <div id="medios" class="list-group">
                                    <a class="list-group-item list-group-item-action active op-slider" href="#list-item-1">Slider</a>
                                    <a class="list-group-item list-group-item-action op-video" href="#list-item-3">Video</a>
                                    <a class="list-group-item list-group-item-action op-imagen" href="#list-item-4">Imagenes</a>
                                </div>
                            </div>
                            <div class="contenidos col-md-10">
                                <div class="panel1">
                                    <h2>Sliders</h2>
                                    <div class="col-md-12 text-right">
                                        <a href="#" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#canvaslider">Crear</a>
                                    </div>
                                    <table id="tb-sliders" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th class="th-sm">Nombre </th>
                                                    <th class="th-sm">Items </th>
                                                    <th class="th-sm">Estado </th>
                                                    <th class="th-sm">Fecha </th>
                                                    <th ></th>
                                                    <th ></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sliders as $k => $cat)
                                                        <tr>
                                                            <td>{{ @$k+1 }}</td>
                                                            <td>{{ @$cat->title }}</td>
                                                            <td>{{ @$cat->items}}</td>
                                                            <td>@if(@$cat->status == 1) activo @else inactivo @endif </td>
                                                            <td>{{ @$cat->updated_at}}</td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-default btn-editar">editar</button></td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-danger  btn-borrar">Borrar</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                </div>

                                <div class="panel2" style="display:none">
                                    <h2>Videos</h2>
                                    <div class="col-md-12 text-right">
                                        <a href="#" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#canvavideo">Crear</a>
                                    </div>
                                    <table id="tb-video" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th class="th-sm">Nombre </th>
                                                    <th class="th-sm">Embed </th>
                                                    <th class="th-sm">Estado </th>
                                                    <th ></th>
                                                    <th ></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($videos as $k => $vid)
                                                        <tr>
                                                            <td>{{ @$k+1 }}</td>
                                                            <td>{{ @$vid->name }}</td>
                                                            <td>{{ @$vid->embed }}</td>
                                                            <td>@if(@$cat->status == 1) activo @else inactivo @endif </td>
                                                            <td>{{ @$cat->updated_at}}</td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-default btn-editar">editar</button></td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-danger  btn-borrar">Borrar</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                </div>
                                <div class="panel3" style="display:none">
                                    <h2>Imagenes</h2>
                                    <div class="col-md-12 text-right">
                                        <a href="#" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#canvaimagen">Crear</a>
                                    </div>
                                    <table id="tb-imagenes" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th class="th-sm">Nombre </th>
                                                    <th class="th-sm">Items </th>
                                                    <th class="th-sm">Estado </th>
                                                    <th ></th>
                                                    <th ></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sliders as $k => $cat)
                                                        <tr>
                                                            <td>{{ @$k+1 }}</td>
                                                            <td>{{ @$cat->name }}</td>
                                                            <td></td>
                                                            <td>{{ @$cat->updated_at}}</td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-default btn-editar">editar</button></td>
                                                            <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-danger  btn-borrar">Borrar</button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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




<!-- Modal: modalQuickView -->
<div class="modal fade" id="canvaslider" tabindex="-1" role="dialog" aria-labelledby="canvaslider"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                    <h2 class="h2-responsive product-name">
                        <strong>Nuevo Slider</strong>
                    </h2>

                    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                            <a class="btn-floating btn-lg blue waves-effect waves-light btn-nuevo-item" data-toggle="tooltip" title="Nuevo Item">
                              <i class="fas fa-plus mdb-gallery-view-icon"></i>
                            </a>
                    </div>
                    <!-- Add to Cart -->
            </div>

          <div class="col-lg-12">
                <form class="md-form" id="frm-items">
                    <!-- Add to Cart -->
                    <div class="card-title">
                            <div class="md-form">
                                    <input type="text" name="nombre" id="form1" class="form-control" >
                                    <label for="form1">Nombre del slider</label>
                            </div>
                    </div>
                    <div class="card-body">

                        <div class="row items">
                            <div class="bitem">
                                <div class="col-md-4 slide-image">
                                        <figure class="figure">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
                                                alt="..." >
                                            </figure>
                                        <div class="file-field">

                                                <div class="d-flex justify-content-center">
                                                <div class="btn btn-mdb-color btn-rounded float-left">
                                                    <span>Imagen</span>
                                                    <input type="file" name="imagen[]">
                                                </div>
                                                </div>
                                        </div>

                                </div>
                                <div class="col-md-7">

                                    <div class="md-form form-group">
                                            <input type="text" name="texto[]" id="form2" class="form-control">
                                            <label for="form2">texto</label>
                                    </div>

                                    <div class="form-row mb-4 form-group">
                                        <div class="col-md-10 md-form">
                                            <input type="text" name="url[]" id="form3" class="form-control">
                                            <label for="form3">Url</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="checkbox"  name="nuevaVentana[]" class="form-check-input" id="f1">
                                                <label class="form-check-label" for="f1">Externo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-form form-group">
                                        <div class="form-check">
                                                <input type="checkbox" name="estado[]" class="form-check-input" id="form4">
                                                <label class="form-check-label" for="form4">Ocultar</label>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>




                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary">guardar
                            <i class="fas fa-save ml-2" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal: modalQuickView -->
<div class="modal fade" id="canvavideo" tabindex="-1" role="dialog" aria-labelledby="canvavideo"  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                      <h2 class="h2-responsive product-name">
                          <strong>Nuevo Video</strong>
                      </h2>

                      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                              <a class="btn-floating btn-lg blue waves-effect waves-light btn-nuevo-item" data-toggle="tooltip" title="Nuevo Item">
                                <i class="fas fa-plus mdb-gallery-view-icon"></i>
                              </a>
                      </div>
                      <!-- Add to Cart -->
              </div>

            <div class="col-lg-12">
                  <form class="md-form" id="frm-items">
                      <!-- Add to Cart -->
                      <div class="card-title">
                              <div class="md-form">
                                      <input type="text" name="nombre" id="form1" class="form-control" >
                                      <label for="form1">Nombre del identificador</label>
                              </div>
                      </div>
                      <div class="card-body">

                      </div>
                      <div class="card-footer">
                          <div class="text-center">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button class="btn btn-primary">guardar
                              <i class="fas fa-save ml-2" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              <!-- /.Add to Cart -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal: modalQuickView -->
<div class="modal fade" id="canvaimagen" tabindex="-1" role="dialog" aria-labelledby="canvaimagen"  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                      <h2 class="h2-responsive product-name">
                          <strong>Nuevo grupo de imagenes</strong>
                      </h2>

                      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                              <a class="btn-floating btn-lg blue waves-effect waves-light btn-nuevo-item" data-toggle="tooltip" title="Nuevo Item">
                                <i class="fas fa-plus mdb-gallery-view-icon"></i>
                              </a>
                      </div>
                      <!-- Add to Cart -->
              </div>

            <div class="col-lg-12">
                  <form class="md-form" id="frm-items">
                      <!-- Add to Cart -->
                      <div class="card-title">
                              <div class="md-form">
                                      <input type="text" name="nombre" id="form1" class="form-control" >
                                      <label for="form1">Nombre del grupo</label>
                              </div>
                      </div>
                      <div class="card-body">






                      </div>
                      <div class="card-footer">
                          <div class="text-center">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button class="btn btn-primary">guardar
                              <i class="fas fa-save ml-2" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              <!-- /.Add to Cart -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
