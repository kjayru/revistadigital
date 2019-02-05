@extends('layouts.admin.master')
@section('content')



<main class="pt-1 mx-lg-5">
        <div class="container-fluid mt-5">
          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

              <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">
                            <div class="col-md-12 text-center">

                              <h5 class="pb-5">{{$message}}</h5>

                              <a href="{{ URL::previous() }}" class="btn btn-danger">Regresar</a>
                        </div>
                    </div>


                </div>
              <!--/.Card-->

            </div>

          </div>


        </div>
      </main>



@endsection
