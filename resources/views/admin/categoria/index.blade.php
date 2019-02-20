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
                                            <h3 class="box-title">Usuarios</h3>
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
                                            <th ></th>
                                            <th ></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $k => $cat)
                                                <tr>
                                                    <td>{{ $k+1 }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>{{ $cat->slug}}</td>
                                                    <td><img src="/storage/{{ $cat->cover }}" class="img-fluid" style="max-width:100px"></td>
                                                    <td class="text-center">@if($cat->status==1) <i class="fas fa-circle text-success"></i>  @else <i class="text-danger fas fa-circle"></i> @endif</td>
                                                    <td>{{ $cat->updated_at}}</td>
                                                    <td class="text-center"><a href="/admin/categories/{{ $cat->id }}/edit" class="btn btn-success  btn-editar">Editar</a></td>
                                                    <td class="text-center"><a href="#"   class="btn btn-danger  btn-category-borrar">Borrar</a>
                                                        <form action="/admin/categories/{{ $cat->id }}" method="post" id="fr-category-delete" >
                                                            <input type="hidden" name="_method" value="delete">
                                                            @csrf
                                                        </form>
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



@endsection
