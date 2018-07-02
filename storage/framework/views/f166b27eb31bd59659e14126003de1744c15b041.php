<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de categorias <a href="categorias/create"><button class="btn btn-success">Nuevo</button></a></h3>
		<?php echo $__env->make('admin.categorias.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					
					<!--<th>Opciones</th>-->
				</thead>
               <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($categoria->id); ?></td>
					<td><?php echo e($categoria->nombre); ?></td>
					
					<td>
						<a href="<?php echo e(URL::action('CategoriaController@edit',$categoria->id)); ?>"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-<?php echo e($categoria->id); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				<?php echo $__env->make('admin.categorias.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		</div>
		<?php echo e($categorias->render()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>