@extends('layouts.front.app')
@section('content')
<div class="main">
        <section class="banner">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/1440x521_novedades.jpg" class="d-block w-100" alt="Novedades">
                        </div>
                        <div class="carousel-item">
                            <a href="/productos-mobiles"><img src="assets/1440x521_instagram.jpg" class="d-block w-100" alt="Instagram"></a>
                        </div>
                        <div class="carousel-item ">
                            <a href="/productos-mobiles"><img src="assets/banner_1.jpg" class="d-block w-100" alt="Triplica"></a>
                        </div>

                        <div class="carousel-item">
                                <a href="/claro_hogar"><img src="assets/banner_3.jpg" class="d-block w-100" alt="Moderniza"></a>
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
                     <div class="col-lg-2 col-md-4 col-sm-6 col-6"> <a href="/{{ $cat->slug }}" class="enlace_ver"> <img src="/storage/{{ $cat->cover }}" class="img-fluid"><p>{{ $cat->name }}</p></a></div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="campanias">
			<div class="container">
				<h2>Lo último en promociones</h2>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-lg-8 mt-3 col-sm-8 mx-auto col-12">
								<a data-toggle="modal" data-target="#exampleModalCenter1" class="linkmodal"><img src="assets/video1.jpg" class="img-fluid"></a>
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
												<iframe width="100%" height="320" src="https://www.youtube.com/embed/MWQoPu6Iv-8?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-10 mx-auto col-sm-10 col-12">
								<div class="row">
									<div class="col-lg-12 col-md-6 col-6 mt-3">
										<a data-toggle="modal" data-target="#exampleModalCenter2" class="linkmodal"><img src="assets/video2.jpg" class="img-fluid mini-wv"></a>
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

														<iframe width="100%" height="320" src="https://www.youtube.com/embed/Uum-ucWkMEQ?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-6 col-6 mt-3">
										<a data-toggle="modal" data-target="#exampleModalCenter3" class="linkmodal"><img src="assets/video3.jpg" class="img-fluid mini-wv"></a>
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
														<iframe width="100%" height="320" src="https://www.youtube.com/embed/uMqZQMyHka0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
						<!--<a href="#" class="enlace_ver">Ver todos &#62;</a>-->
					</div>

				</div>
			</div>
		</section>


        <section class="contacto">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="row pt-5 pb-4">
							<div class="col-md-6 col-sm-12">
									<h3>Contacto</h3>
									<p>Tel: <a href="tel:993000488" class="enlace_ver">993000488</a> <a href="https://api.whatsapp.com/send?phone=051993000488&text=%20"><img src="assets/icon-whatsapp.png" width="20px" class="img-fluid"></a> <span class="salto">/</span> Email: <a href="mailto:mktclaro@claro.com.pe" class="enlace_ver">mktclaro@claro.com.pe</a></p>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<!--<a href="#"><img src="assets/icon-facebook.svg" width="31px" class="img-fluid"></a>-->
								<!--<a href="#" class="ml-4"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>-->
								<!--<a href="#" class="ml-4"><img src="assets/icon-youtube.svg" width="34px" class="img-fluid"></a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



</div>

@endsection
