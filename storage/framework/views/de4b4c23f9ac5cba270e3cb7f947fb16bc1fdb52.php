<?php $__env->startSection('body'); ?>
<body class="single-product home-page">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				<video poster="images/video_slider.jpg" playsinline autoplay muted loop>
					<source src="http://physcode.com/video/330149744.mp4" type="video/mp4">
				</video>
				<div class="content-slider">
					<p>Find your special tour today </p>
					<h2>With Columbia Tours </h2>
					<p><a href="tours.html" class="btn btn-slider">VIEW TOURS </a></p>
				</div>
			</div>

			<div class="slider-tour-booking">
				<div class="container">
					<div class="row travel-booking-search hotel-booking-search travel-booking-style_1">
		
            
	<?php echo Form::open(array('url'=>'paquetes/destinos','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>

            
							<ul class="hb-form-table">
								
								<!--<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">

										<select name="tour" class="form-control">
											<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($categoria->id); ?>" ><?php echo e($categoria->nombre); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</li>-->
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourdestino" class="form-control">
											<?php $__currentLoopData = $destinos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destino): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($destino->id); ?>" ><?php echo e($destino->destino); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select></div>
								</li>
								
								<li class="hb-submit">
									<button type="submit">Buscar Paquetes</button>
                                </li>
							</ul>
							<input type="hidden" name="lang" value="">

						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>

		<!--suscripcion-->
<?php echo $__env->make('partials.suscripcion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			
<!--paquetes grupales-->

			<div class="padding-top-6x padding-bottom-6x section-background grupales">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						
   <h3 class="title_primary">Excursiones Programadas y Salidas Grupales</h3>
						<span class="line_after_title" style="color:#0169ac"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>


                  <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$paquete->id)); ?>" class="travel_tour-LoopProduct-link">
											<span class="price">
						<span class="travel_tour-Price-amount amount"><?php echo e($paquete->precios); ?></span>
											</span>
												
												<img src="img/<?php echo e($paquete->imagen_url); ?>" alt="" title="">
											</a>
											<!--<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>-->
										</div>

                                 <!--         paquetes por categoria         -->
                                 
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$paquete->id)); ?>" rel="bookmark"><?php echo e($paquete->titulo); ?></a>
											</h4></div>
											<span class="post_date"><?php echo e($paquete->dias); ?></span>
											
										</div>
                                 	

									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$paquete->id)); ?>" class="read_more_button">VER MÁS
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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
							<a href="<?php echo e(url('promociones')); ?>">
<img src="/img/promociones.png">
</a>
						</div>
						<div class="col-sm-4">

							<div class="promociones-slider">
		<div><a href="<?php echo e(url('promociones',2)); ?>">	
<img src="/img/carnavales.png">
        </a></div>
        <div><a href="<?php echo e(url('promociones',1)); ?>">	
<img src="/img/new-year.png">
        </a></div>
        <div><a href="<?php echo e(url('promociones',4)); ?>">	
<img src="/img/fiestas-patrias.png">
        </a></div>
    </div>
						</div>
						<div class="col-sm-4">
							<a href="<?php echo e(url('bancos')); ?>">
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


                  <?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$destacado->id)); ?>" class="travel_tour-LoopProduct-link">
											
												
												<img src="img/<?php echo e($destacado->imagen_url); ?>" alt="" title="">
											</a>
											<!--<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>-->
										</div>

                                 <!--         paquetes por categoria         -->
                                 
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$destacado->id)); ?>" rel="bookmark"><?php echo e($destacado->titulo); ?></a>
											</h4></div>
											<span class="post_date"><?php echo e($destacado->dias); ?></span>
											
										</div>
                                 	

									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$destacado->id)); ?>" class="read_more_button">VER MÁS
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
jQuery('.promociones-slider').slick({
  
  fade: true,
  
  autoplay: true,
  autoplaySpeed: 2000,
  
  
  
  
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>