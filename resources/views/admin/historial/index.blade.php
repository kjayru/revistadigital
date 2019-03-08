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
                                  @foreach($categorias as $cat)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="category_group[]" value="{{ $cat->id }}"  class="custom-control-input oncategory" id="{{ $cat->slug }}">
                                        <label class="custom-control-label" for="{{ $cat->slug }}">{{ $cat->name }}</label>
                                    </div>
                                   @endforeach

                                  </nav>
                                </nav>


                                <nav id="bloque2" class="flex-column mt-4">
                                    <a class="navbar-brand" href="#">Mes</a>
                                    <nav class="nav  flex-column">
                                    @foreach($meses as $k => $mes)
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox"  value="{{ strtolower($mes) }}" class="custom-control-input onmes" id="{{ strtolower($mes) }}">
                                          <label class="custom-control-label" for="{{ strtolower($mes) }}">{{ $mes }}</label>
                                      </div>

                                    @endforeach

                                    </nav>
                                  </nav>
                            </div>

                            <div class="card  col-sm-8 col-lg-9" id="canvafiltro">
                                <div class="row">
                                    @foreach($files as $file)

                                  
                                    <div class="col-xl-4 col-md-6 mb-r item {{ strtolower(@$file->flipper->month) }} categoria-{{ @$file->flipper->category_id }}">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                  <a href="/storage/{{ $file->path }}" target="_blank">
                                                    @if(\App\Category::fileExist($cat->cover) ==true)
                                                    <img src="/storage/{{ @$cat->cover }}" class="img-fluid" style="max-width:100px">
                                                  
                                                    @else
                                                    <img src="/assets/no-disponible.jpeg" class="img-fluid" style="max-width:100px">
                                                    @endif
                                                    
                                                  </a>
                                                </p>
                                                <p><a href="#" class="btn btn-xs btn-danger btn-file-delete" data-id="{{ @$file->id }}" data-toggle="modal" data-target="#deluser" >Eliminar</a></p>
                                                <a href="/storage/{{$file->path}}" class="card-link text-center">
                                                 {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $file->created_at, 'UTC')->setTimezone('America/Lima')->format('d/m/Y') }}
                                                </a>
                                                
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
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
  
  
            <form class="delete" action="" method="POST" id="fr-delete-file">
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
