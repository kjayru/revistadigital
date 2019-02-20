@extends('layouts.admin.master')
@section('content')

<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">

            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="/admin/roles">Roles</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                 </nav>

              </div>

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">


                    <div class="col-md-12 ">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">EDITAR ROLE</h3>

					</div>
					<div class="box-body">
                        <div class="box box-info">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="/admin/roles/{{$role->id}}" method="POST">
                                     @method('PUT')
                                    @include('admin.role.partials.form')

                            <!-- /.box  -footer -->
                            </form>
                        </div>
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
