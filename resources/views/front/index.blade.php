@extends('layouts.front.app')
@section('content')
<div class="main">
        <section class="banner">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/banner_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner_1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="catalogos">
            <div class="container">
                <h2>Catálogos por categorías</h2>
                <div class="row">
                    @foreach($categories as $cat)
                     <div class="col-lg-2 col-md-4 col-sm-6 col-6"><img src="{{ $cat->cover }}" class="img-fluid"><p><a href="/{{ $cat->slug }}">{{ $cat->name }}</a></p></div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="campanias">
            <div class="container">
                <h2>Últimas campañas</h2>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-8 mt-3 col-sm-8 mx-auto col-12">
                                <a data-toggle="modal" data-target="#exampleModalCenter1"><img src="assets/video1.jpg" class="img-fluid"></a>
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <!--<h5 class="modal-title" id="exampleModalCenterTitle">Video #1</h5>-->
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <iframe width="100%" height="320" src="https://www.youtube.com/embed/C6nRRB92-fw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-10 mx-auto col-sm-10 col-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-6 mt-3">
                                        <a data-toggle="modal" data-target="#exampleModalCenter2"><img src="assets/video2.jpg" class="img-fluid"></a>
                                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <!--<h5 class="modal-title" id="exampleModalCenterTitle">Video #2</h5>-->
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe width="100%" height="320" src="https://www.youtube.com/embed/Uum-ucWkMEQ?list=PL4ZABvZe_5Naf932TlUdyiNFxT96gdVvx" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-6 mt-3">
                                        <a data-toggle="modal" data-target="#exampleModalCenter3"><img src="assets/video3.jpg" class="img-fluid"></a>
                                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <!--<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>-->
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe width="100%" height="320" src="https://www.youtube.com/embed/Uum-ucWkMEQ?list=PL4ZABvZe_5Naf932TlUdyiNFxT96gdVvx" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-10 mx-auto text-right pt-3">
                        <a href="#" class="enlace_ver">Ver todos &#62;</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row pt-5 pb-4">
                            <div class="col-md-6 col-sm-12">
                                    <h3>Contacto</h3>
                                    <p>Tel: 998887256 / Lorem ipsum dolor.</p>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <a href="#"><img src="assets/icon-facebook.png" class="img-fluid"></a>
                                <!--<a href="#" class="ml-4"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>-->
                                <a href="#" class="ml-4"><img src="assets/icon-youtube.png" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</div>

@endsection
