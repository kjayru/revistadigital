@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->

            <!--Card content-->
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                      <li class="breadcrumb-item" ><a href="/admin/contents#sliders">Slider</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Slider Items</li>

                    </ol>
            </nav>


          <!-- Heading -->
          @if(session('info'))
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    {{ session('info')}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
          <!--Grid row-->
          <div class="card mb-4 wow fadeIn">
         
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">


                <div class="col-md-12 ">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Items</h3>
                        </div>

                        <div class="box-body">
                           

                                <div class="col-md-12 text-right">
                                    
                                        <a href="{{ route('items.create',['slider_id'=>$slider_id])}}"  class="btn btn-primary ml-auto">Crear</a>
                                    </div>
                            
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <th>Nombre</th>
                                            <th>Description</th>
                                            <th>URL</th>
                                            <th>Fecha Creación</th>
                                            <th colspan="3"></th>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                                <tr>
                                                    <td>{{ $item->title}}</td>
                                                    <td>
                                                        {{ $item->description}}
                                                    </td>
                                                    <td>{{ $item->url}}</td>
                                                    <td>{{ $item->created_at}}</td>
                                                    <td>
                                                        <a href="/admin/items/{{$item->id}}/edit"  class=" btn btn-sm btn-success">Modificar</a>
                                                        <a href="#" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                          
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

            </div>
        </div>


        </div>
      </main>


      <div class="modal fade" id="delete-item" tabindex="-1" role="dialog" aria-labelledby="delete-itemLabel" aria-hidden="true">
            <div class="modal-dialog bg-danger" role="document">
              <div class="modal-content bg-danger text-white">
                <form id="frm-delete3">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" id="id">
                    <div class="modal-header">
                    <h5 class="modal-title" id="delete-itemLabel">Eliminar Item</h5>
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



<!-- Modal -->
    <div class="modal fade" id="modificarItem" tabindex="-1" role="dialog" aria-labelledby="modificarItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-header">
                <h5 class="modal-title" id="modificarItemLabel">Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Cargar</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Seleccione Imagen</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
@endsection
