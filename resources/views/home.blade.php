@extends ('layout')
@section ('body')
<body class="single-product home-page">
@endsection
@section ('contenido')

<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				<video poster="images/video_slider.jpg" playsinline autoplay muted loop>
					<source src="http://physcode.com/video/330149744.mp4" type="video/mp4">
				</video>
				<div class="content-slider">

					<div class="col-sm-12 col-md-12 amadeus-title">
						<p>Find your special tour today </p>
						<h2>With Columbia Tours </h2>
						<p><a href="#" class="btn btn-slider">VIEW TOURS </a></p>
					</div>
					<div class="col-sm-12 col-md-12">
						<div class="container">
							<!-- Tab links -->
								<div class="tab">
  								<button id="defaultOpen" class="tablinks" onclick="openCity(event, 'London')" >Amadeus</button>
  								<button class="tablinks" onclick="openCity(event, 'Paris')">PullmanTour</button>
  								<button class="tablinks" onclick="openCity(event, 'Tokyo')">Assist Card</button>
									<button class="tablinks" onclick="openCity(event, 'Hide')">Ocultar</button>
								</div>

								<!-- Tab content -->
								<div id="London" class="tabcontent">
  								{{-- <h3>London</h3> --}}
  								<div class="twidget-container" id="twidget"></div>
								</div>

								<div id="Paris" class="tabcontent">
  								{{-- <h3>Paris</h3> --}}
  								<p>Paris is the capital of France.</p>
								</div>

								<div id="Tokyo" class="tabcontent">
  								{{-- <h3>Tokyo</h3> --}}
  								<p>Tokyo is the capital of Japan.</p>
								</div>
								<div id="Hide" class="tabcontent" style="padding: 0; border: none">
  								{{-- <h3>Tokyo</h3> --}}
  								{{-- <p>Tokyo is the capital of Japan.</p> --}}
								</div>
						</div>
						{{-- <div class="twidget-container" id="twidget"></div> --}}
						{{-- <p><iframe frameborder="0" height="500" scrolling="auto" src="https://www-amer.epower.amadeus.com/columbiatours" width="900" name="amadeusheight"></iframe></p> --}}
					</div>

				</div>
			</div>

			<div class="slider-tour-booking">
				<div class="container">
					<div class="row travel-booking-search hotel-booking-search travel-booking-style_1">


	{!! Form::open(array('url'=>'paquetes/destinos','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

							<ul class="hb-form-table">

								<!--<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">

										<select name="tour" class="form-control">
											@foreach ($categorias as $categoria)
									<option value="{{ $categoria->id }}" >{{ $categoria->nombre}}</option>
											@endforeach
										</select>
									</div>
								</li>-->
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourdestino" class="form-control">
											@foreach ($destinos as $destino)
									<option value="{{ $destino->id }}" >{{ $destino->destino}}</option>
											@endforeach
										</select></div>
								</li>

								<li class="hb-submit">
									<button type="submit">Buscar Paquetes</button>
                                </li>
							</ul>
							<input type="hidden" name="lang" value="">

						{!!Form::close()!!}
					</div>
				</div>
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
						<div class="col-sm-4">
							<a href="{{ url('promociones') }}">
<img src="/img/promociones.png">
</a>
						</div>
						<div class="col-sm-4">

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
						<div class="col-sm-4">
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
			<div class="col-sm-6 siguenos-footer">
				<div class="sub-title">
		<h3>siguenos en nuestras redes sociales y MANTENTE ACTUALIZADO CON LAS MEJORES OFERTAS</h3>
	            </div>
				            <div class="social">
									<ul>
										<li>
											<a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
										</li>
									</ul>
								</div>
							</div>

			<div class="col-sm-6 suscripcion-footer">
				<div class="sub-title">
		<h3>Registrate para RECIBIR NUESTRAS PROMOCIONES</h3>
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
