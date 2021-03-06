<?php $__env->startSection('body'); ?>
<body class="single-product trenes">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">

		<?php echo $__env->make('partials.provider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="banner-wrapper container article_heading">
					<div class="breadcrumbs-wrapper">
						<ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/trenes">Trenes</a></li>
							
						</ul>
					</div>
					<h2 class="heading_primary">TRENES</h2></div>
			</div>
		</div>

			</div>

	</div>

	<!--suscripcion-->
<?php echo $__env->make('partials.suscripcion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="container">
			<div class="row">
		aqui va el catalogo de los trenes
</div>
</div>
	</div>

	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('scripts'); ?>

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

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>