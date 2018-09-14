<?php $__env->startSection('body'); ?>
<body class="single-product travel_tour-page travel_tour">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="wrapper-container">

	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url('images/banner/top-heading.jpg');">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li><a href="blog.html">Business</a></li>
						<li>Love advice from experts</li>
					</ul>
				</div>
				<h2 class="heading_primary"><?php echo e($paquetes->titulo); ?></h2></div>
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
								<div class="meta_date">
									<span><?php echo e($paquetes->dias); ?> Dias</span>
								</div>
								<div class="meta_values">
									<span></span>
									<div class="value">

	                 <a href="<?php echo e(URL::action('PaquetesController@paquetes',$categorias->id)); ?>" rel="tag"><?php echo e($categorias->nombre); ?></a>
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
									<?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
										<a href="/img/<?php echo e($imagen->url); ?>" class="swipebox" title=""><img width="950" height="700" src="/img/<?php echo e($imagen->url); ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
									</div>
									<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									<?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<img width="150" height="100" src="/img/<?php echo e($imagen->url); ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>


							<p><?php echo e($paquetes->descripcion); ?></p>


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
								<a href="#tab-itinerary_tab" role="tab" data-toggle="tab">Itinerario</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
								<a href="#tab-hotel_prices_tab" role="tab" data-toggle="tab">Precios</a>
									</li>
									<li class="location_tab_tab" role="presentation">
										<a href="#tab-location_tab" role="tab" data-toggle="tab">T & C</a>
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
										
										<div style="display:none;" class="lista2">
			 <?php echo ($paquetes->itinerario); ?>
		 </div>
		 <script>
		 jQuery(".lista2 ul li").each(function(i){
			 var listado2=jQuery(this);
			document.write("<div class=\"interary-item\"><p><span class=\"icon-left\">"+(i+1)+"</span></p><div class=\"item_content\"><p style=\"margin-top: 19px\">"+listado2.text()+"</p></div></div>");
					});
					i++;
		 </script>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-hotel_prices_tab">
										
										<?php echo ($paquetes->precios); ?>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location_tab">
										
										<?php echo ($paquetes->terminos); ?>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus quam vel odio imperdiet, et viverra lorem tristique. Nullam sit amet dapibus turpis.</p>
									<div class="btn-descarga"><a href="<?php echo e(url('download',$paquetes->file)); ?>">Descargar Paquete</a></div>
									</div>
								</div>
							</div>


						</div>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4146899.js" data-role="form" data-default-width="367px"></script>
<!-- www.123formbuilder.com script ends here -->
								
								<div class="widget-area align-left col-sm-3">
									<aside class="widget widget_travel_tour">

										<div class="wrapper-special-tours">

											<?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="inner-special-tours">
							<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$destacado->id)); ?>">
				<img width="430" height="305" src="/img/<?php echo e($destacado->imagen_url); ?>" alt="" title=""></a>

												<div class="post_title"><h3>
									<a href="single-tour.html" rel="bookmark"><?php echo e($destacado->titulo); ?></a>
												</h3></div>

											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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




	<?php $__env->stopSection(); ?>





<tr>
<td><i class="fa fa-check icon-tick icon-tick--on"></i>
</td>
</tr>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>