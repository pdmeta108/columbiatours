@extends ('admin.layout')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo paquete</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'admin/paquetes','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="titulo">titulo</label>
            	<input type="text" name="titulo" class="form-control" placeholder="titulo...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
            	
                <select name="categoria" class="form-control" id="sel1">
    @foreach ($paquetes as $paquete)
<option>{{ $paquete->categoria->nombre}}</option>
@endforeach
  </select>
  
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}	

			 {!! Form::open(['url'=>'admin/imagenes', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone' , 'enctype' => 'multipart/form-data']) !!} 
            {{Form::token()}}
<div class="form-group">
<div class="dz-message" style="height:200px;">
                        Drop your files here jajaj
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
            </div>
{!!Form::close()!!}	
            
		</div>
	</div>
@endsection

@section('scripts')
    {!! Html::script('/adminltejs/dropzone.js'); !!}
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
@endsection