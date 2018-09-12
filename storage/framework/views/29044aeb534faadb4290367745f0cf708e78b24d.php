<?php $__env->startSection('body'); ?>
<body class="single-product cruceros">
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
				<h2 class="heading_primary">CRUCEROS</h2></div>
		</div>
		<div class="container">
			<div class="row">
		<?php $__currentLoopData = $cruceros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crucero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-3">
	<a href="<?php echo e(URL::action('PaquetesController@crucerospaquetes',$crucero->id)); ?>">
<img  src="/img/<?php echo e($crucero->imagen_url); ?>" alt="" title="">
</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>