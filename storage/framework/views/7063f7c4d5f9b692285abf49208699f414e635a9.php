<?php $__env->startSection('body'); ?>
<body class="single-product seguros">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">
				<div class="banner-wrapper container article_heading">
					<div class="breadcrumbs-wrapper">
						<ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/seguros">Seguros</a></li>
							
						</ul>
					</div>
					<h2 class="heading_primary">SEGUROS</h2></div>
			</div>

	</div>

	<!--suscripcion-->
<?php echo $__env->make('partials.suscripcion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="container">
			<div class="row">
		Aqui la vista de los seguros
</div>
</div>
	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>