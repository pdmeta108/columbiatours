<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo paquete</h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>

			<?php echo Form::open(array('url'=>'admin/paquetes','method'=>'POST','autocomplete'=>'off')); ?>

            <?php echo e(Form::token()); ?>

            <div class="form-group">
            	<label for="titulo">titulo</label>
            	<input type="text" name="titulo" class="form-control" placeholder="titulo...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
            	
                <select class="form-control" id="sel1">
    <?php $__currentLoopData = $paquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option><?php echo e($paquete->categoria->nombre); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  holaaaaa
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			<?php echo Form::close(); ?>	

			 <?php echo Form::open(['url'=>'admin/imagenes', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone' , 'enctype' => 'multipart/form-data']); ?> 
            <?php echo e(Form::token()); ?>

<div class="form-group">
<div class="dz-message" style="height:200px;">
                        Drop your files here jajaj
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
            </div>
<?php echo Form::close(); ?>	
            
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo Html::script('/adminltejs/dropzone.js');; ?>

    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,
            paramName: "file",
            success: function (file, response) {
        console.log(response);
            
            
              
            }
        };
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>