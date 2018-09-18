<?php $__env->startSection('body'); ?>
<body class="single-product seguros">
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
						
				</div>
			</div>
		</div>

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