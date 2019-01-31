<!DOCTYPE html>
<html lang="es-PE">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Revista Digital</title>

	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

	<style type="text/css">
		.revista3d {
				height: 666px;
				width: 90%;
				margin: 20px auto;
				border: 0px solid #000;
			}
		 @media screen and (max-width: 540px){
				.revista3d {
					height: 400px;
					width: 80%;
					margin: 10px auto;
					border: 0px solid #000;
				}
		 }
		.fullscreen {
			background-color: #333;
		}
	</style>

	<script type="text/javascript">
		var ub = window.location;
		var uf="https://www.facebook.com/sharer.php?u="+ub;
		var ut="https://twitter.com/home?status="+ub;
		var ug="https://plus.google.com/share?url="+ub;
		var up="https://www.pinterest.com/pin/create/button/?url="+ub;
		var ul="https://www.linkedin.com/shareArticle?mini=true&url="+ub;
		var uw="https://web.whatsapp.com://send?text="+ub;
	</script>


</head>
<body>

	<!--Compartir facebook-->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
		function facebookShare() {
			FB.ui({
				method: 'share_open_graph',
				action_type: 'og.likes',
				action_properties: JSON.stringify({
					object:'https://developers.facebook.com/docs/javascript/examples',
				})
			}, function(response){
				// Debug response (optional)
				console.log(response);
			});
		}
	</script>
	<!--//End Compartir facebook-->
	<header class="fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 no-gutters">

					<div class="pos-f-t no-gutters">

						<nav class="navbar navbar-dark main-nav" id="main-nav">
							<div>
								<button id="menu" class="menu-bar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
									<div class="uno"></div>
									<div class="dos"></div>
									<div class="tres"></div>
								</button>
								<a href="#"><img src="/assets/logo-claro.svg" class="lg_claro img-fluid"></a>
							</div>

							<a href="#"> <img src="/assets/power-sign.svg"> <span class="text-sesion">Cerrar sesión</span></a>
						</nav>

						<div class="menu-main collapse bg-negro" id="navbarToggleExternalContent">
							<div class="">
								<ul class="menu navbar-nav">
                                    @foreach($categories as $cat)
									<li class="item-menu"><a href="/categoria/{{ $cat->name }}" class="nav-link">{{ $cat->name }}</a></li>
                                    @endforeach
								</ul>
							</div>
							<div class="bg_menu" id="navbarToggleExternalContent"></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>


	<div class="main">

		<div style="background: #e9ecef;">
			<div class="container">
				<div class="row" aria-label="breadcrumb">
					<ul class="breadcrumb" style="margin-bottom: 0;">
						<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ $slug->name }}</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-6 pt-2 pb-2"><span class="h4">{{ $slug->name }} </span></div>
				<div class="col-md-6 col-sm-6 col-6 text-right pt-2 pb-2">

					<!--
					<a href="whatsapp://send?text=http://www.claro.com.pe/" class="ml-4" data-action="share/whatsapp/share"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>

					<a href="javascript:void(0);" data-action=”share/whatsapp/share” onclick="window.open(uw,&quot;gplusshare&quot;,&quot;toolbar=0,status=0,width=800,height=600&quot;);" rel="nofollow" title="Compartir en WhatsApp+"><img alt="Compartir en WhatsApp " class="lkdn btnwp-w" src="assets/icon-whatsapp.png" title="Compartir en WhatsApp " /></a>
					<a href="whatsapp://send?text=http://www.claro.com.pe/" class="mr-2 btnwp-m" data-action="share/whatsapp/share"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>


					<a href="#" class="ml-4"><img src="assets/icon-whatsapp.png" class="img-fluid"></a> -->
					<!--<a href=”fb-messenger://share/?link= https://www.facebook.com/AmericaMovilPeruSAC/”><img border="0" src="assets/icon-messenger.png"></a>-->
					<!--<a href=""  class="ml-4" onclick="facebookShare()"  ><img border="0" src="assets/icon-messenger.png"></a>-->
					<a href="/{{ $slug->flipper->file->path }}" target="_blank" class="btn btn-info">Descarga</a>
					<script type="text/javascript">
					//	window.open('fb-messenger://share?link=' + encodeURIComponent(link) + '&app_id=' + encodeURIComponent(app_id));
					</script>

				</div>
			</div>
			<hr style="margin: 0;">
		</div>



		<section class="revista">
			<!--<div class="container">-->
				<div class="revista3d" id="revista3d" ></div>
			<!--</div>-->

				<script src="/flipper/js/libs/jquery.min.js"></script>
				<script src="/flipper/js/libs/html2canvas.min.js"></script>
				<script src="/flipper/js/libs/three.min.js"></script>
				<script src="/flipper/js/libs/pdf.min.js"></script>

				<script src="/flipper/js/dist/3dflipbook.js"></script>
				<script type="text/javascript">


					$('#revista3d').FlipBook({
					  pdf: '/{{ $slug->flipper->file->path }}',
					  template: {
					    html: '/flipper/templates/default-book-view.html',
					    styles: [
					      '/flipper/css/white-book-view.css?v={{ uniqid() }}'
					    ],
					    links: [
					      {
					        rel: 'stylesheet',
					        href: '/flipper/css/font-awesome.min.css'
					      }
					    ],
					    script: '/flipper/js/default-book-view.js'
                      },
                      propertiesCallback: function(props) {
                       // props.page.depth *= 0.7;
                        //props.cover.padding = 0.002;
                        //props.sheet.wave = 0;
                        props.sheet.flexibleCorner = 0.1;
                         props.sheet.flexibility = 1;
                        //props.sheet.cornerDeviation = 0;
                        //props.sheet.flexibility = 0;

                        return props;

                      },
                      controlsProps: {
                        downloadURL: '/{{$slug->flipper->file->path }}',
                        actions: {
                            cmdBackward: {
                            code: 37,
                            },
                            cmdForward: {
                            code: 39
                            },
                            cmdSave: {
                            code: 68,
                            flags: 1,
                            }
                         }
                        }
					});


				</script>
		</section>


		<section class="catalogos catalogos-m">
			<div class="container">
				<h2>Catálogos por categorías</h2>
				<div class="row">
                    @foreach($categories as $cat)
					<div class="col-lg-2 col-md-4 col-sm-6 col-6"><img src="{{  $cat->cover }}" class="img-fluid"><p>{{ $cat->name }}</p></div>
                    @endforeach
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


	<footer>
		<div class="container">
			<div class="row pt-3">
				<div class="col-lg-6 col-md-12 text-center">
					<span class=""><img src="assets/logo-claro.svg" class="lg_claro-f"></span> <span>Todos los derechos reservados, Claro 2018</span>
				</div>
				<div class="col-lg-6 col-md-12 text-center text-right">
					<p class="enlace_ver">
						<a href="http://www.claro.com.pe/institucional/" target="_blank" class="enlace_ver">Sitio Institucional</a> /
						<a href="http://www.claro.com.pe/legal-y-regulatorio/" target="_blank" class="enlace_ver">Legal y regulatorio</a> /
						<a href="http://www2.osiptel.gob.pe/Devoluciones/Principal.aspx" target="_blank" class="enlace_ver">Sistema SIRD</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="/js/jquery-3.3.1.slim.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/main.js" ></script>

</body>
</html>


