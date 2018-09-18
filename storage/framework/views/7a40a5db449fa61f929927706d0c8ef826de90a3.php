<div class="slider-tour-booking">
	<div class="container">
		<div class="row travel-booking-search hotel-booking-search travel-booking-style_1">


<?php echo Form::open(array('url'=>'paquetes/destinos','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>


				<ul class="hb-form-table form-paquetes">

					
					<li class="hb-form-field">
						<div class="hb-form-field-input hb_input_field">
							<select name="tourdestino" class="form-control select-paquetes">
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
		<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4111233.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="COTIZAR"></script>
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
