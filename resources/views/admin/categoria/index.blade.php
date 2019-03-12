@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

          <!-- Heading -->

            <!--Card content-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Categoría</li>
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
                            <div class="col-md-12 ">

                                    <!-- Default box -->
                            <div class="box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Categorías</h3>
                                        </div>

                                <div class="box-body">
                                        @can('categories.create')
                                        <a href="{{route('categories.create')}}" class="btn btn-primary btn-right btn-page-create">Crear</a>
                                        @endcan

                                    <table id="tb-categories" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th class="th-sm">Nombre </th>
                                            <th class="th-sm">Slug </th>
                                            <th>Cover</th>
                                            <th>Estado</th>
                                            <th class="th-sm">Fecha </th>
                                            <th></th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $k => $cat)
                                                <tr>
                                                    <td>{{ $k+1 }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>{{ $cat->slug}}</td>
                                                    <td>
                                                       @if(\App\Category::fileExist($cat->cover) ==true)
                                                       <img src="/storage/{{ @$cat->cover }}" class="img-fluid" style="max-width:100px">
                                                       @else
                                                       <img src="/assets/{{ @$cat->cover }}" class="img-fluid" style="max-width:100px">
                                                       @endif
                                                      </td>
                                                    <td class="text-center">@if(@$cat->status==1) <i class="fas fa-circle text-success"></i>  @else <i class="text-danger fas fa-circle"></i> @endif</td>
                                                    <td>{{ @$cat->updated_at}}</td>
                                                    <td class="text-center"><a href="/admin/categories/{{ @$cat->id }}/edit" class="btn btn-success  btn-editar">Editar</a></td>
                                                    <td class="text-center"><a href="#"  data-id="{{ @$cat->id }}" data-toggle="modal" data-target="#deluser" class="btn btn-danger btn-category-delete">Borrar</a>
                                                    </td>
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
<!-- modal delete-->
<div class="modal modal-danger fade in" id="deluser">
  <div class="modal-dialog">
    <div class="modal-content">


          <form class="delete" action="" method="POST" id="fr-delete-category">
              <div class="modal-header">
                  <h4 class="modal-title">Confirmar Eliminación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                
              </div>
              <div class="modal-body text-center">

                    <input type="hidden" name="_method" value="delete" >
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <p>¿Esta seguro de eliminar este item?</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-outline" >Eliminar</button>
              </div>
          </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal-dialog -->



@endsection
