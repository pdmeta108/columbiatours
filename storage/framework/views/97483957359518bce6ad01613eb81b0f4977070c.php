<?php $__env->startSection('contenido'); ?>

<?php $__env->startSection('body'); ?>
<body class="single-product paquete-page">
<?php $__env->stopSection(); ?>

	<div class="site wrapper-content">
		<div class="sub-header">

		<div class="top_site_main">
					<div class="banner-wrapper container article_heading">
						<div class="breadcrumbs-wrapper">
							<ul class="phys-breadcrumb">
								<li><a href="http://localhost:8000" class="home">Home</a></li>
								<li><a href="http://localhost:8000/paquetes">Paquetes</a></li>
								
							</ul>
						</div>
						<h2 class="heading_primary">PAQUETES</h2></div>
				</div>

		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignright">
						<ul class="tours products wrapper-tours-slider">
							<?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="item-tour col-md-4 col-sm-6 product">

								<div class="item_border item-product">
									<div class="post_images">
						<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$paquete->id)); ?>">


											<img width="430" height="305" src="/img/<?php echo e($paquete->imagen_url); ?>" alt="" title="">
										</a>
										<div class="group-icon">
											<a href="tours.html" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Escorted Tour"><i class="flaticon-airplane-4"></i></a>
											<a href="tours.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rail Tour"><i class="flaticon-cart-1"></i></a>
										</div>
									</div>
									<div class="wrapper_content">
										<div class="post_title"><h4>
											<a href="<?php echo e(URL::action('PaquetesController@paquetedetalle',$paquete->id)); ?>" rel="bookmark"><?php echo e($paquete->titulo); ?></a>
										</h4></div>
										<!--<span class="post_date">5 DAYS 4 NIGHTS</span>-->
										<div class="description">
											<p><?php echo e($paquete->descripcion); ?></p>
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
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</ul>
						<div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<li><span class="page-numbers current">1</span></li>
								<li><a class="page-numbers" href="#">2</a></li>
								<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget-area align-left col-sm-3">


<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/3929344.js" data-role="form" data-default-width="313px"></script>
<!-- www.123formbuilder.com script ends here -->


						<aside class="widget widget_travel_tour">
							<div class="wrapper-special-tours">

								<?php $__currentLoopData = $destacados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destacado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="inner-special-tours">
									<a href="single-tour.html">
										<img width="430" height="305" src="/img/<?php echo e($destacado->imagen_url); ?>" alt="" title=""></a>
									<div class="item_rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
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
		</section>
	</div>

                       <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>