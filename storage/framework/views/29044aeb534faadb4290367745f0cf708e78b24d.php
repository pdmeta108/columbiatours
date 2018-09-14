<?php $__env->startSection('body'); ?>
<body class="single-product cruceros">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">
				<div class="banner-wrapper container article_heading">
					<div class="breadcrumbs-wrapper">
						<ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/cruceros">Cruceros</a></li>
							
						</ul>
					</div>
					<h2 class="heading_primary">CRUCEROS</h2></div>
	</div>

	</div>

	<!--suscripcion-->
	<section class="suscripcion-bg">
			<div class="row">
				<div class="col-sm-6 cotiza">
					<div class="col-sm-12 col-md-6">
							<img src="/img/agente-icono.png"/>
					</div>
					<div class="col-sm-12 col-md-6">
						<h3>COTIZA CON </h3>
						<h3>NUESTROS AGENTES</h3>
						<button type="button" class="btn btn-default btn-billing">

<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4115948.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="COTIZAR"></script>
<!-- www.123formbuilder.com script ends here -->

						</button>
					</div>
				</div>
				<div class="col-sm-6 suscripcion-m">
					<div class="col-sm-12 col-md-6">
					<!-- www.123formbuilder.com script begins here -->
					

					<h3>REGÍSTRATE PARA RECIBIR</h3>
					<h3>NUESTRAS PROMOCIONES</h3>
					<button type="button" class="btn btn-default btn-suscription">

	<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4112564.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="REG&Iacute;STRATE"></script>
					</button>
					
	<!-- www.123formbuilder.com script ends here -->
					</div>
					<div class="col-sm-12 col-md-6">
						<img src="/img/mano.png"/>
					</div>
				</div>
			</div>
	</section>

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