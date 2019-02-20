@extends('layouts.front.app')
@section('content')
<div class="main">

        <section class="mkt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="row">
                                <div class="col-lg-7 text-center pb-3">
                                    <img src="/assets/logo_mkt_claro.svg" class="img-fluid">
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-4 text-center">
                                            <a href="https://play.google.com/store/apps/details?id=com.claroperu.puntodeventa" class="enlace_ver" target="_blank">
                                                <img src="/assets/icon_mkt_app.svg" alt="" class="img-fluid">
                                                <span class="tit-icon">App</span>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <a href="https://api.whatsapp.com/send?phone=051993000488&text=%20" class="enlace_ver" target="_blank">
                                                <img src="/assets/icon_mkt_whatsapp.svg" alt="" class="img-fluid">
                                                <span class="tit-icon">WhatsApp</span>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-4 text-center">
                                            <a href="mailto:mktclaro@claro.com.pe" class="enlace_ver">
                                                <img src="/assets/icon_mkt_mail.svg" alt="" class="img-fluid">
                                                <span class="tit-icon">Mail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
        </section>

        <section class="catalogos">
                <div class="container">
                    <h2>Revista por categorías</h2>
                    <div class="row justify-content-center">
                        @foreach($categories as $cat)
                         <div class="col-lg-5c">
                              <a href="/{{ $cat->slug }}" data-label="categoria-{{ $cat->slug }}" class="enlace_ver"> 
                                <img src="/storage/{{ $cat->cover }}" class="img-fluid">
                                <h3>{{ $cat->name }}</h3>
                                <p>{{ $cat->description }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>



        <section class="banner">
           @if(@$slider->items)
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @for($i=0;$i<@$total;$i++)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i==0) class="active" @endif></li>

                        @endfor
                    </ol>

                    <div class="carousel-inner">

                       @foreach(@$slider->items as $k => $slide)
                        <div class="carousel-item @if($k==0) active @endif">
                            @if(@$slide->url)
                            <a href="{{ @$slide->url }}" @if(@$slide->external_url==2) target='_blank' @endif>
                                <img src="/storage/{{ @$slide->background }}" class="d-block w-100" alt="Triplica">
                            </a>
                            @else

                                <img src="/storage/{{ @$slide->background }}" class="d-block w-100" alt="Triplica">

                            @endif
                        </div>
                        @endforeach



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
            @endif

        
        @if(count($videos)>0)
        <section class="campanias">
			<div class="container">
                    <h2>Últimas campañas</h2>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
                            @if(count($videos)==3)
                            <!--tres video-->
							<div class="col-lg-8 mt-3 col-sm-8 mx-auto col-12">
								<a data-toggle="modal" data-target="#exampleModalCenter1" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[0]->embed}}/maxresdefault.jpg" class="img-fluid"></a>
								<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">

												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="modal-body">
												<iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[0]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-10 mx-auto col-sm-10 col-12">
								<div class="row">
									<div class="col-lg-12 col-md-6 col-6 mt-3">
										<a data-toggle="modal" data-target="#exampleModalCenter2" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[1]->embed}}/mqdefault.jpg" class="img-fluid mini-wv"></a>
										<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">

														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">

														<iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[1]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-6 col-6 mt-3">
										<a data-toggle="modal" data-target="#exampleModalCenter3" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[2]->embed}}/maxresdefault.jpg" class="img-fluid mini-wv"></a>
										<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">

														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[2]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            @endif
                            @if(count($videos)==2)
                             <!--dos videos-->
                             <div class="col-lg-6 mt-3 col-sm-8 mx-auto col-12">
                                    <a data-toggle="modal" data-target="#exampleModalCenter1" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[0]->embed}}/mqdefault.jpg" class="img-fluid"></a>
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[0]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 col-sm-8 mx-auto col-12">
                                        <a data-toggle="modal" data-target="#exampleModalCenter1" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[1]->embed}}/mqdefault.jpg" class="img-fluid"></a>
                                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[1]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             @endif

                             @if(count($videos)==1)
                             <!--video-->
                             <div class="col-lg-8 mt-3 col-sm-8 mx-auto col-12">
                                    <a data-toggle="modal" data-target="#exampleModalCenter1" class="linkmodal"><img src="https://img.youtube.com/vi/{{$videos[0]->embed}}/mqdefault.jpg" class="img-fluid"></a>
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/{{$videos[0]->embed}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

						</div>

					</div>



					<div class="col-lg-10 mx-auto text-right pt-3">
                            <a href="https://www.youtube.com/user/canalclaro" target="_blank" class="enlace_ver">Ver más &#62;</a><!---->
                    </div>

				</div>
			</div>
		</section>
        @endif
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! @$page->content !!}
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
