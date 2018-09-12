<?php $__env->startSection('contenido'); ?>
<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li>Tours</li>
					</ul>
				</div>
				<h1 class="heading_primary">Tours</h1></div>
		</div>
<section class="bancos-logos">
			<div class="container">
				<div class="row">
					
<?php $__currentLoopData = $bancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-3">
	<a href="<?php echo e(URL::action('PaquetesController@bancospaquetes',$banco->id)); ?>">
<img  src="/img/<?php echo e($banco->url); ?>" alt="" title="">
</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

					
				</div>
			</div>
</section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>