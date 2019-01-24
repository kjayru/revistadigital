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
                <span>Paginas</span>
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
          <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">


                <div class="col-md-12 ">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Paginas</h3>


                        </div>

                        <div class="box-body">

                                @can('podcasts.create')
                                    <a href="{{route('pages.create')}}" class="btn btn-primary btn-right btn-page-create">Crear</a>
                                @endcan

                            <table class="table table-striped table-hover">
                                <thead>
                                    <th width="10">ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Descripción</th>

                                    <th colspan="3"></th>
                                </thead>
                                <tbody>
                                    @foreach($pages as $key => $pag)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $pag->title }}</td>
                                            <td>{{ $pag->slug }}</td>
                                            <td>{{ $pag->resume }}</td>


                                            <td width="15">
                                                    @can('pages.edit')
                                                    <a href="{{route('pages.edit',$pag->id )}}" class="btn btn-success pull-right">Editar</a>
                                                    @endcan
                                            </td>
                                            <td width="10">
                                                    @can('pages.destroy')

                                                        <form action="{{ route('pages.destroy',$pag->id ) }}" method="POST">
                                                            <input type="hidden" name="_method" value="delete" >
                                                            <input type="submit" value="borrar" class="btn btn-danger"/>
                                                            @csrf
                                                        </form>
                                                    @endcan
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



@endsection
