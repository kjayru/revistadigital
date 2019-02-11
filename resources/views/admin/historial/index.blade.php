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

                            <div class="card  col-sm-8 col-lg-9" id="canvafiltro">
                                <div class="row">
                                    @foreach($files as $file)

                                  
                                    <div class="col-xl-4 col-md-6 mb-r item {{ @$file->flipper->month }} categoria-{{ @$file->flipper->category_id }}">
                                        <div class="cascading-admin-card p-3 text-center">
                                                <p class="card-text">
                                                <a href="/storage/{{ $file->path }}" target="_blank"><img src="/storage/{{$file->thumbnail}}"  class="img-fluid" style="max-width: 100px;"></a>
                                                </p>
                                                <a href="/storage/{{$file->path}}" class="card-link text-center">{{ $file->created_at }}</a>
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



@endsection
