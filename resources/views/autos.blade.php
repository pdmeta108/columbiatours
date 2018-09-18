@extends ('layout')


@section ('body')
<body class="single-product autos">
@endsection

@section ('contenido')

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">

		@include('partials.provider')
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="banner-wrapper container article_heading">
					{{-- <div class="breadcrumbs-wrapper">
						<ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/autos">Autos</a></li>
							<li>Love advice from experts</li>
						</ul>
					</div> --}}
					{{-- <h2 class="heading_primary">AUTOS</h2> --}}
				</div>
			</div>
		</div>
			</div>
	</div>

	<!--suscripcion-->
@include('partials.suscripcion')

		<div class="container">
			<div class="row">
		Aqui la vista de los autos

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
	</div>

	@endsection

	@section ('scripts')

	<script>
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
