<?php $__env->startSection('body'); ?>
<body class="single-product vuelos">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li><a href="blog.html">Business</a></li>
						<li>Love advice from experts</li>
					</ul>
				</div>
				<h2 class="heading_primary">Vuelos</h2></div>
		</div>
		<div class="container">
			<div class="row">
		Aqui la vista de los autos

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
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>