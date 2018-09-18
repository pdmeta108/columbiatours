@extends ('layout')
@section ('body')
<body class="single-product home-page">
@endsection
@section ('contenido')

<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				{{-- <video poster="images/video_slider.jpg" playsinline autoplay muted loop>
					<source src="http://physcode.com/video/330149744.mp4" type="video/mp4">
				</video> --}}

				@include('partials.provider')

			</div>


		<!--suscripcion-->
@include('partials.suscripcion')


<!--paquetes grupales-->

			<div class="padding-top-6x padding-bottom-6x section-background grupales">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">

   <h3 class="title_primary">Excursiones Programadas y Salidas Grupales</h3>
						<span class="line_after_title" style="color:#0169ac"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>


                  @foreach ($paquetes as $paquete)
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="{{URL::action('PaquetesController@paquetedetalle',$paquete->id)}}" class="travel_tour-LoopProduct-link">
											<span class="price">
						<span class="travel_tour-Price-amount amount">{{$paquete->precios}}</span>
											</span>

												<img src="img/{{$paquete->imagen_url}}" alt="" title="">
											</a>
											<!--<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>-->
										</div>

                                 <!--         paquetes por categoria         -->

										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="{{URL::action('PaquetesController@paquetedetalle',$paquete->id)}}" rel="bookmark">{{$paquete->titulo}}</a>
											</h4></div>
											<span class="post_date">{{$paquete->dias}}</span>

										</div>


									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="{{URL::action('PaquetesController@paquetedetalle',$paquete->id)}}" class="read_more_button">VER MÁS
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
                       @endforeach
                          </div>
					</div>
				</div>
			</div>

			<!--promociones-->

<div class="padding-top-6x padding-bottom-6x section-background promociones">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<h3 class="title_primary">PROMOCIONES</h3><span class="line_after_title"></span>
					</div>
					<div class="row">
						<div class="col-sm-4 mobile-promo">
							<a href="{{ url('promociones') }}">
<img src="/img/promociones.png">
</a>
						</div>
						<div class="col-sm-4 mobile-promo">

							<div class="promociones-slider">
		<div><a href="{{url('promociones',2)}}">
<img src="/img/carnavales.png">
        </a></div>
        <div><a href="{{url('promociones',1)}}">
<img src="/img/new-year.png">
        </a></div>
        <div><a href="{{url('promociones',4)}}">
<img src="/img/fiestas-patrias.png">
        </a></div>
    </div>
						</div>
						<div class="col-sm-4 mobile-promo">
							<a href="{{ url('bancos') }}">
<img src="/img/promo_bancos.png">
</a>
						</div>

					</div>

				</div>
			</div>


			<!--paquetes populares-->

			<div class="padding-top-6x padding-bottom-6x section-background populares">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div class="title_subtitle">CONOCE LOS</div>
						<h3 class="title_primary" style="color:#ffffff">PAQUETES MÁS VENDIDOS</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>


                  @foreach ($destacados as $destacado)
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="{{URL::action('PaquetesController@paquetedetalle',$destacado->id)}}" class="travel_tour-LoopProduct-link">


												<img src="img/{{$destacado->imagen_url}}" alt="" title="">
											</a>
											<!--<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>-->
										</div>

                                 <!--         paquetes por categoria         -->

										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="{{URL::action('PaquetesController@paquetedetalle',$destacado->id)}}" rel="bookmark">{{$destacado->titulo}}</a>
											</h4></div>
											<span class="post_date">{{$destacado->dias}}</span>

										</div>


									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="{{URL::action('PaquetesController@paquetedetalle',$destacado->id)}}" class="read_more_button">VER MÁS
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
                       @endforeach
                          </div>
					</div>
				</div>
			</div>

		<!-- suscripcion footer -->


<div class="row">
			<div class="col-sm-6 suscripcion-footer">
				<div class="sub-title">
					<h3>SÍGUENOS EN NUESTRAS REDES SOCIALES Y</h3>
					<h3><strong>MANTENTE ACTUALIZADO</strong></h3>
					<h3><strong>CON LAS MEJORES OFERTAS</strong></h3>
	            </div>
				            <div class="social">
									<ul>
										<li>
											<a target="_blank" class="facebook" href="https://www.facebook.com/Columbia-Tours-178463502222553/"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="https://mobile.twitter.com/columbiatourspa/"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="https://www.instagram.com/columbiatourspa/"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="https://www.youtube.com/user/Columbiatourspa/"><i class="fa fa-youtube"></i></a>
										</li>
									</ul>
								</div>
							</div>

			<div class="col-sm-6 siguenos-footer">
				<div class="sub-title">
					<h3>REGÍSTRATE PARA</h3>
					<h3><strong>Recibir Nuestras Promociones</strong></h3>
					<button type="button" class="btn btn-default btn-registrateb">
						{{-- REGÍSTRATE PARA RECIBIR<br>NUESTRAS PROMOCIONES --}}
	<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4112564.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="REG&Iacute;STRATE"></script>
					</button>
	      </div>

			</div>


</div>








		</div>
	</div>

@endsection

@section ('scripts')

<script>
jQuery('.promociones-slider').slick({

  fade: true,

  autoplay: true,
  autoplaySpeed: 2000,




});
jQuery('#twidget').twidget({
		locale: 'es',
		type: 'avia',
		marker: 11111,
		default_origin: 'PTY',
		default_destination: 'MIA'
});

document.getElementById("defaultOpen").click();
</script>

@endsection
