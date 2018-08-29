@extends ('layout')


@section ('body')
<body class="single-product travel_tour-page travel_tour">
@endsection

@section ('contenido')
<div class="wrapper-container">

	<div class="site wrapper-content">
<div class="top_site_main" style="background-image:url(/img/{{$paquetes->imagen_url}});background-size: cover;background-position: 50% 50%;">
			<div class="banner-wrapper container article_heading">
				
				<!--<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li><a href="blog.html">Business</a></li>
						<li>Love advice from experts</li>
					</ul>
				</div>-->
				<h2 class="heading_primary">{{$paquetes->titulo}}</h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">
								
								<div class="tour_code">
									<strong>Code: </strong>LMJUYH
								</div>
							</div>
							<div class="tour_after_title">
								<!--<div class="meta_date">
									<span>{{$paquetes->dias}} Dias</span>
								</div>-->
								<div class="meta_values">
									<span></span>
									<div class="value">
										
	                 <a href="{{URL::action('PaquetesController@paquetes',$categorias->id)}}" rel="tag">{{$categorias->nombre}}</a>
									</div>
								</div>
								<div class="tour-share">
									<ul class="share-social">
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
							<div id="slider" class="flexslider">
								<ul class="slides">
									@foreach ($imagenes as $imagen)
                                    <li>
										<a href="/img/{{ $imagen->url}}" class="swipebox" title=""><img width="950" height="700" src="/img/{{ $imagen->url}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									@endforeach
									</ul>
									</div> 
									<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									@foreach ($imagenes as $imagen)
									<li>
										<img width="150" height="100" src="/img/{{ $imagen->url}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									@endforeach
								</ul>
							</div>
								
								
							<p>{{$paquetes->descripcion}}</p>


                           <div style="display:none;" class="lista">
                           	
							<?php echo ($paquetes->incluye); ?>
						</div>




							
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab active" role="presentation">
										<a href="#tab-description" role="tab" data-toggle="tab">Incluye</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
								<a href="#tab-itinerary_tab" role="tab" data-toggle="tab">Precios/Hoteles</a>
									</li>
									<li class="location_tab_tab" role="presentation">
										<a href="#tab-location_tab" role="tab" data-toggle="tab">Terminos y Condiciones</a>
									</li>
									<li class="reviews_tab" role="presentation">
										<a href="#tab-reviews" role="tab" data-toggle="tab">Descargar Paquete</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
										
										
										<table class="tours-tabs_table">
											<tbody>
											

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script>
jQuery(".lista ul li").each(function(){
  var listado=jQuery(this);
 document.write("<tr><td><i class='fa fa-check icon-tick icon-tick--on'></i>"+listado.text()+ "</br></td></tr>");
     });
</script>
											
											
											</tbody>
										</table>
										
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab" id="tab-itinerary_tab">
			<?php echo ($paquetes->precios); ?>
									</div>

									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location_tab">
										<?php echo ($paquetes->terminos); ?>
									</div>
									<!-- descarga paquete -->
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus quam vel odio imperdiet, et viverra lorem tristique. Nullam sit amet dapibus turpis.</p>
									<div class="btn-descarga"><a href="{{url('download',$paquetes->file)}}">Descargar Paquete</a></div>
										
									</div>
								</div>
							</div>
							
							
						</div>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								
											<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4041462.js" data-role="form" data-default-width="367px"></script>
<!-- www.123formbuilder.com script ends here -->
										
								<div class="widget-area align-left col-sm-3">
									<aside class="widget widget_travel_tour">

										<div class="wrapper-special-tours">

											@foreach ($destacados as $destacado)
											<div class="inner-special-tours">
							<a href="{{URL::action('PaquetesController@paquetedetalle',$destacado->id)}}">
				<img width="430" height="305" src="/img/{{ $destacado->imagen_url}}" alt="" title=""></a>
												
												<div class="post_title"><h3>
									<a href="single-tour.html" rel="bookmark">{{ $destacado->titulo}}</a>
												</h3></div>
												
											</div>
											@endforeach
										</div>
										
									</aside>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</div>


	

	@endsection





<tr>
<td><i class="fa fa-check icon-tick icon-tick--on"></i>
</td>
</tr>																																			
	

