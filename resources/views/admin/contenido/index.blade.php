@extends('layouts.admin.master')
@section('content')
<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categoría</li>
                </ol>
            </nav>
          <!-- Heading -->

          <!--Grid row-->
          <div class="row">

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
                                        <a href="#" class="btn btn-primary ml-auto btn-crear-slider" data-toggle="modal" data-target="#canvaslider">Crear</a>
                                    </div>
                                        <table id="tb-sliders" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th class="th-sm">Nombre </th>
                                                <th class="th-sm">Items </th>

                                                <th class="th-sm">Fecha </th>
                                                <th class="th-sm">Estado </th>
                                                <th ></th>
                                                <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($sliders as $k => $cat)
                                                    <tr>
                                                        <td>{{ @$k+1 }}</td>
                                                        <td>{{ @$cat->title }}</td>
                                                        <td>{{ @count($cat->items)}}</td>

                                                        <td>{{ @$cat->updated_at}}</td>
                                                        <td>

                                                                <div class="form-group">
                                                                        <span class="switch switch-sm">
                                                                          <input data-id="{{$cat->id}}" type="checkbox" @if(@$cat->status == 1) checked  @endif  class="switch estado-slider" id="switch-sm-{{$k+1}}">
                                                                          <label for="switch-sm-{{$k+1}}"></label>
                                                                        </span>
                                                                </div>
                                                        </td>
                                                        <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-success btn-slider-editar">editar</button></td>
                                                        <td><button type="button" data-id="{{ @$cat->id }}" class="btn btn-danger  btn-slider-borrar">Borrar</button></td>
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
                                                <th class="th-sm">Destacar </th>
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
                                                        <td>
                                                                <div class="form-group">
                                                                        <span class="switch switch-sm">
                                                                          <input data-id="{{$vid->id}}" type="checkbox" @if(@$vid->status == 2) checked  @endif  class="switch estado-video" id="switch-sm-v{{$k+1}}">
                                                                          <label for="switch-sm-v{{$k+1}}"></label>
                                                                        </span>
                                                                </div>
                                                        </td>

                                                        <td>
                                                                <div class="form-group">
                                                                        <span class="switch switch-sm">
                                                                          <input data-id="{{$vid->id}}" type="checkbox" @if(@$vid->destacado == 2) checked  @endif  class="switch destacado-video" id="switch-sm-d{{$k+1}}">
                                                                          <label for="switch-sm-d{{$k+1}}"></label>
                                                                        </span>
                                                                </div>
                                                        </td>
                                                        <td>{{ @$vid->updated_at}}</td>
                                                        <td><button type="button" data-id="{{ @$vid->id }}" class="btn btn-success btn-video-editar">editar</button></td>
                                                        <td><button type="button" data-id="{{ @$vid->id }}" class="btn btn-danger  btn-video-borrar">Borrar</button></td>
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

                                                <th >Fecha</th>
                                                <th class="th-sm">Estado </th>
                                                <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($imagenes as $k => $cat)
                                                    <tr>
                                                        <td>{{ @$k+1 }}</td>
                                                        <td>{{ @$cat->name }}</td>
                                                        <td>{{ @$cat->updated_at}}</td>
                                                        <td></td>

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


                    <div class="card-footer">
                        <a href="/admin/magazines" class="btn btn-primary">Revista</a>

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
                <form class="md-form" method="POST" enctype="multipart/form-data" id="frm-items">
                    @csrf
                    <input type="hidden" name="_method" id="metodo" value="POST">
                    <input type="hidden" name="slider_id" id="slider_id">
                    <!-- Add to Cart -->
                    <div class="card-title">
                            <div class="form-group">
                                    <input type="text" name="nombre" id="form1" class="form-control" placeholder="Nombre Slide" required>

                            </div>
                    </div>
                    <div class="card-body">

                        <div class="row items">
                            <div class="bitem">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-5 slide-image">
                                              <div class="row">
                                                  <div class="col-6"> <figure class="figure">
                                                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="img-fluid z-depth-1"  style="max-width:60px">
                                                  </figure></div>
                                                <div class="col-6">
                                                  <figure class="figure">
                                                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="img-fluid z-depth-1"  style="max-width:30px">
                                                  </figure>
                                                </div>
                                                <div class="col-6">
                                                  <div class="file-field">
                                                    <label for="">Seleccione imagen desktop</label>
                                                      <input type="file"  name="imagen[]" class="form-control preimage"  accept="image/png, image/jpeg" required>
                                                  </div>
                                                
                                                </div>
                                                <div class="col-6">
                                                  <div class="file-field">
                                                    <label for="">Seleccione imagen movil</label>
                                                      <input type="file"  name="imagen[]" class="form-control preimage"  accept="image/png, image/jpeg" >
                                                  </div>
                                                
                                                </div>
                                               
                                              </div>
                                        </div>
                                        
                                        <div class="col-md-7">

                                            <div class="md-form form-group">
                                                    <input type="text" name="texto[]" id="form2" placeholder="Texto" class="form-control" required>

                                            </div>

                                            <div class="form-row mb-4 form-group">
                                                <div class="col-md-10 md-form selectorurl">


                                                            <select name="url[]" class="form-control">
                                                                <option value="">Seleccione</option>
                                                                @foreach($categories as $cat)
                                                                <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                                                                @endforeach
                                                            </select>


                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input type="checkbox"  name="nuevaVentana[]" value="2" class="form-check-input urlexterna" id="f1">
                                                        <label class="form-check-label" for="f1">Externo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md-form form-group">
                                                <div class="form-check">
                                                        <input type="checkbox" name="estado[]" value="2" class="form-check-input" id="form4">
                                                        <label class="form-check-label" for="form4">Ocultar</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Eliminar slide"><i class="fas fa-minus-circle"></i></a>
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


<!-- Modal: video -->
<div class="modal fade" id="canvavideo" tabindex="-1" role="dialog" aria-labelledby="canvavideo"  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                      <h2 class="h2-responsive product-name">
                          <strong>Nuevo Video</strong>
                      </h2>

              </div>

            <div class="col-lg-12">
                  <form class="md-form" method="POST" id="frm-video">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="video_id" id="video_id">

                      <div class="card-body">


                                <div class="form-group">
                                        <label for="form1">Nombre </label>
                                        <input type="text" name="name" id="name" class="form-control" required>

                                </div>



                                <div class="form-group">
                                        <label for="embed">Embed</label>
                                        <input type="text" name="embed" id="embed" class="form-control" required>

                                </div>

                        <div class="form-group">
                                <div class="form-check">
                                        <input type="checkbox" name="destacado" value="2" class="form-check-input" id="destacado">
                                        <label class="form-check-label" for="destacado">Destacado</label>
                                </div>

                            </div>
                        <div class=" form-group">
                            <div class="form-check">
                                    <input type="checkbox" name="status" value="1" class="form-check-input" id="oculto">
                                    <label class="form-check-label" for="oculto">Oculto</label>
                            </div>

                        </div>


                      </div>
                      <div class="card-footer">
                          <div class="text-center">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary">guardar
                              <i class="fas fa-save ml-2" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>
                  </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal: imagen -->
<div class="modal fade" id="canvaimagen" tabindex="-1" role="dialog" aria-labelledby="canvaimagen"  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                      <h2 class="h2-responsive product-name">
                          <strong>Nuevo grupo de imagenes</strong>
                      </h2>
              </div>

            <div class="col-lg-12">
                  <form class="form" id="frm-gallery" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="gallery_id" id="gallery_id">
                      <!-- Add to Cart -->
                      <div class="card-title">
                              <div class="form-group">
                                      <input type="text" name="nombre" id="fb1" class="form-control" placeholder="Nombre del grupo" required>

                              </div>
                      </div>
                      <div class="card-body">

                        <div class="form-group">

                              <span>Seleccione imagenes</span>
                              <input type="file" name="fotos[]" accept="image/*"  placeholder="imagenes" multiple required>


                          </div>

                      </div>
                      <div class="card-footer">
                          <div class="text-center">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <input type="submit" class="btn btn-primary" value="Guardar">

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

<!-- Modal delete-->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-danger" role="document">
          <div class="modal-content bg-danger text-white">
            <form id="frm-delete">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="item_id" id="item_id">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-center">
                    ¿Está seguro de eliminar este item?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-warning text-white btn-confirm-delete-slider">Confirmar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
<!-- end modal-->

<!-- Modal delete2-->
<div class="modal fade" id="delete-modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-danger" role="document">
          <div class="modal-content bg-danger text-white">
            <form id="frm-delete2">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" id="id">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-center">
                    ¿Está seguro de eliminar este item?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-warning text-white btn-confirm-delete-slider">Confirmar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
<!-- end modal-->

<!-- Modal delete3-->
<div class="modal fade" id="delete-modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-danger" role="document">
          <div class="modal-content bg-danger text-white">
            <form id="frm-delete3">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" id="id">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-center">
                    ¿Está seguro de eliminar este item?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-warning text-white btn-confirm-delete-slider">Confirmar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
<!-- end modal-->

@php $last_key = count($categories); $last_key= $last_key-1; @endphp
  {{ $last_key }}
<script>

    var categories = {
        @foreach($categories as $k => $cat)
        "row{{$k+1}}":{'slug':'{{ $cat->slug }}','nombre':'{{ $cat->name }}'},

        @if($k == $last_key)
        "row{{$k+1}}":{'slug':'{{ $cat->slug }}','nombre':'{{ $cat->name }}'}
        @endif
        @endforeach
    };

    var jsoncat = JSON.stringify(categories);


</script>
  @endsection
