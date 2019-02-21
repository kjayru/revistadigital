@extends('layouts.front.app')
@section('content')
	<script type="text/javascript">
		var ub = window.location;
		var uf="https://www.facebook.com/sharer.php?u="+ub;
		var ut="https://twitter.com/home?status="+ub;
		var ug="https://plus.google.com/share?url="+ub;
		var up="https://www.pinterest.com/pin/create/button/?url="+ub;
		var ul="https://www.linkedin.com/shareArticle?mini=true&url="+ub;
		var uw="https://web.whatsapp.com://send?text="+ub;
	</script>
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



	<div class="main">

		<div style="background: #e9ecef;">
			<div class="container">
				<div class="row" aria-label="breadcrumb">
					<ul class="breadcrumb" style="margin-bottom: 0;">
						<li class="breadcrumb-item"><a href="{{ route('home' )}}">Inicio</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ @$cat->name }}</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-6 pt-2 pb-2"><span class="h4">{{ @$cat->name }} </span></div>
				<div class="col-md-6 col-sm-6 col-6 text-right pt-2 pb-2">

					<!--
					<a href="whatsapp://send?text=http://www.claro.com.pe/" class="ml-4" data-action="share/whatsapp/share"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>

					<a href="javascript:void(0);" data-action=”share/whatsapp/share” onclick="window.open(uw,&quot;gplusshare&quot;,&quot;toolbar=0,status=0,width=800,height=600&quot;);" rel="nofollow" title="Compartir en WhatsApp+"><img alt="Compartir en WhatsApp " class="lkdn btnwp-w" src="assets/icon-whatsapp.png" title="Compartir en WhatsApp " /></a>
					<a href="whatsapp://send?text=http://www.claro.com.pe/" class="mr-2 btnwp-m" data-action="share/whatsapp/share"><img src="assets/icon-whatsapp.png" class="img-fluid"></a>


					<a href="#" class="ml-4"><img src="assets/icon-whatsapp.png" class="img-fluid"></a> -->
					<!--<a href=”fb-messenger://share/?link= https://www.facebook.com/AmericaMovilPeruSAC/”><img border="0" src="assets/icon-messenger.png"></a>-->
					<!--<a href=""  class="ml-4" onclick="facebookShare()"  ><img border="0" src="assets/icon-messenger.png"></a>-->
                    @if(@$slug->file_id)
                    <a href="/storage/{{ @$slug->file->path }}" target="_blank" class="btn btn-info">Descarga</a>
                    @endif
					<script type="text/javascript">
					//	window.open('fb-messenger://share?link=' + encodeURIComponent(link) + '&app_id=' + encodeURIComponent(app_id));
					</script>

				</div>
			</div>
			<hr style="margin: 0;">
		</div>



		<section class="revista">

             @if(@$estado==1)
				<div class="revista3d" id="revista3d" ></div>
            @else
                <div class="container text-center">
                    <h2 class="pt-5 pb-4">NO HAY CONTENIDO GENERADO PARA ESTA CATEGORIA</h2>
                </div>
            @endif


		</section>


		<section class="catalogos catalogos-m">
			<div class="container">
				<h2>Catálogos por categorías</h2>
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
        
        {!! @$page->content !!}

		<section class="contacto">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="row pt-5 pb-4">
                                <div class="col-md-6 col-sm-12">
                                        <h3>Contacto</h3>
                                        <p>Tel: <a href="tel:993000488" class="enlace_ver">993000488</a> <a href="https://api.whatsapp.com/send?phone=051993000488&text=%20"><img src="assets/icon-whatsapp.png" width="20px" class="img-fluid"></a> / Email: <a href="mailto:mktclaro@claro.com.pe" class="enlace_ver">mktclaro@claro.com.pe</a>.</p>
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
    @include('layouts.front.partial.flipscript')


    @if(@$slug->file_id)

    <script>


        $('#revista3d').FlipBook({
          pdf: '/storage/{{ $slug->file->path }}',
          template: {
            html: '/flipper/templates/default-book-view.html?v={{ uniqid() }}',
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

             props.sheet.flexibleCorner = 0.1;
             props.sheet.flexibility = 1;
             props.sheet.color = 0xFFFFFF;
             props.cover.binderTexture ='/flipper/images/texture.jpg';
            return props;

          },
          controlsProps: {
            downloadURL: '/{{$slug->file->path }}',
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
    @endif

    @if(@$slug->gallery_id)

    <script>

    var book = $('#revista3d').FlipBook({
        pageCallback: function(n) {
            var imageDescription = {
                type: 'image',
                src: '/storage/gallery/{{ $slug->gallery->prefijo }}-'+(n+1)+'.jpg',
                interactive: false
            };
            return imageDescription;
        },
        pages: 6,
        template: {
            html: '/flipper/templates/default-book-view.html?v={{ uniqid() }}',
            styles: [
              '/flipper/css/white-book-view.css?v={{ uniqid() }}'
            ],
            links: [
              {
                rel: 'stylesheet',
                href: '/flipper/css/font-awesome.min.css'
              }
            ],
            script: '/flipper/js/default-book-view.js?v={{ uniqid() }}',

            autoNavigation: {
                urlParam: 'fb3d-page',
                navigates: 1
            }
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

    @endif

    @if(@$slug->video_id)
        EMBED VIDEO
    @endif
@endsection

