@extends ('admin.layout')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Paquete: {{ $paquete->titulo}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

{!!Form::model($paquete,['method'=>'PATCH','files'=>'true','route'=>['paquetes.update',$paquete->id]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="titulo">titulo</label>
            {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'titulo...']) !!}
            </div>
            <div class="form-group">
            	<label for="descripcion">Descripción</label>
    <textarea class="form-control" name="descripcion" placeholder="Descripción..." rows="10" cols="80">{{$paquete->descripcion}}</textarea>

            	
            </div>

<h3>Seleccione dias</h3>
<div class="form-group">
<input type="number" name="dias" value="{{$paquete->dias}}">
</div>

            <div class="form-group">
            	
<h3>Seleccione destino</h3>
                <select name="destino" class="form-control" id="sel1">
    @foreach ($destinos as $destino)
<option value="{{ $destino->id }}" {{ old('destino',$paquete->destino_id) == $destino->id ? 'selected' : '' }} >{{ $destino->destino}}</option>
@endforeach
  </select>

  <h3>Seleccione categoria</h3>
                <select name="categoria" class="form-control" id="sel1">
    @foreach ($categorias as $categoria)
<option value="{{ $categoria->id }}" {{ old('categoria',$paquete->categoria_id) == $categoria->id ? 'selected' : '' }} >{{ $categoria->nombre}}</option>
@endforeach
  </select>

  <!--aqui van las promociones-->
<h3>PROMOCIONES</h3>
 <div class="promociones">
  
  <h3>tipo</h3>
<select name="promocion" class="form-control" id="sel1">
    @foreach ($promociones as $promocion)
<option value="{{ $promocion->id }}" {{ old('promocion',$paquete->promocion_id) == $promocion->id ? 'selected' : '' }}>{{ $promocion->tipo}}</option>
@endforeach
  </select>


<h3>banco</h3>
<select name="banco" class="form-control" id="sel1">
    @foreach ($bancos as $banco)
<option value="{{ $banco->id }}" {{ old('banco',$paquete->banco_id) == $banco->id ? 'selected' : '' }}>{{ $banco->nombre}}</option>
@endforeach
  </select>


<h3>proveedor</h3>
<select name="proveedor" class="form-control" id="sel1">
    @foreach ($proveedores as $proveedor)
<option value="{{ $proveedor->id }}" {{ old('proveedor',$paquete->proveedor_id) == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre}}</option>
@endforeach
  </select>
</div>

<h3>Marque si es un paquete destacado</h3>
<div class="form-group">
{!! Form::checkbox('destacado', '1', true); !!}
</div>

  
            </div>

<h4>Que incluye el paquete</h4>
<div class="form-group">
        <textarea id="editor" name="incluye" rows="10" cols="80">{{$paquete->incluye}}</textarea>
</div>

<h4>Itinerario</h4>
<div class="form-group">
        <textarea id="editor1" name="itinerario" rows="10" cols="80" placeholder="solo si es del tipo grupal">{{$paquete->itinerario}}</textarea>
</div>

<h4>Terminos y condiciones</h4>
<div class="form-group">
        <textarea id="editor2" name="terminos" rows="5" cols="40">{{$paquete->terminos}}</textarea>
</div>

<h4>Precios / Hoteles</h4>
<div class="form-group">
        <textarea id="editor3" name="precios" rows="10" cols="80">{{$paquete->precios}}</textarea>
</div>

<!--<div class="form-group">
        {!! Form::file('file'); !!}
</div>-->







            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}	



<h3>Galeria de Imagenes</h3>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Imagenes
                </div>
                <div class="panel-body">



{!!Form::model($paquete,['method'=>'POST','files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone','route'=>['imagenes.store',$paquete->id]])!!}
{{Form::token()}}

{!! Form::close() !!}

                </div>
            </div>



<div class="row galeria_admin">
@foreach ($paquete->imagen as $imagen)
<div class=col-sm-3>
    <img src="/img/{{ $imagen->url}}" />
</div>
@endforeach	
</div>


            
		</div>
	</div>
@endsection

@section('scripts')

<script>

Dropzone.options.myDropzone = {
        
        
        
        maxFiles: 10,
        acceptedFiles: ".jpg, .jpeg, .png",
        maxFilesize: 2,
        dictDefaultMessage: "carga tu imagen aqui",
        paramName: "file",
        success: function (file, response) {
        console.log(response);
      }
  };

  Dropzone.options.myDropzone2 = {
        
        
        
        maxFiles: 1,
        acceptedFiles: ".jpg, .jpeg, .png",
        maxFilesize: 2,
        dictDefaultMessage: "carga tu imagen aqui",
        paramName: "file2",
        success: function (file, response) {
        console.log(response);
      }
  };

/* new Dropzone(".dropzoniano", { 

url: "/admin/paquetes/",

paramName: 'imagen',
maxFiles: 1,
dictDefaultMessage: 'agregar imagen destacadas'



}); */


</script>

<script>

CKEDITOR.replace('editor');

CKEDITOR.replace('editor1');

CKEDITOR.replace('editor2');

CKEDITOR.replace('editor3');

</script>

  @endsection

  <style>
      .row.galeria_admin img {
    width: 100%;
    height: auto;
}

img {
    width: 100%;
    height: auto;
}


.promociones {
    border: solid 1px #000;
    padding: 39px;
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>