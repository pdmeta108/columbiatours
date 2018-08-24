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
    <textarea class="form-control" name="descripcion" placeholder="Descripción..." rows="10" cols="80"></textarea>
            	
            </div>

<h3>Seleccione dias</h3>
<div class="form-group">
<input type="number" name="dias">
</div>

            <div class="form-group">
            	
<h3>Seleccione destino</h3>
                <select name="destino" class="form-control" id="sel1">
    @foreach ($destinos as $destino)
<option value="{{ $destino->id }}">{{ $destino->destino}}</option>
@endforeach
  </select>


                <h3>Seleccione categoria</h3>
                <select name="categoria" class="form-control" id="sel1">
    @foreach ($categorias as $categoria)
<option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
@endforeach
  </select>

<!--aqui van las promociones-->

 <div class="promociones">
  <h3>PROMOCIONES</h3>
<select name="promocion" class="form-control" id="sel1">
    @foreach ($promociones as $promocion)
<option value="{{ $promocion->id }}">{{ $promocion->tipo}}</option>
@endforeach
  </select>
</div>

  
            </div>

<h4>Que incluye el paquete</h4>
<div class="form-group">
        <textarea id="editor" name="incluye" rows="10" cols="80"></textarea>
</div>

<h4>Itinerario</h4>
<div class="form-group">
        <textarea id="editor1" name="itinerario" rows="10" cols="80">
            
Agregar solo si la categoria es del tipo "grupal"

        </textarea>
</div>

<h4>Terminos y condiciones</h4>
<div class="form-group">
        <textarea id="editor2" name="terminos" rows="5" cols="40"></textarea>
</div>

<h4>Precios / Hoteles</h4>
<div class="form-group">
        <textarea id="editor3" name="precios" rows="10" cols="80"></textarea>
</div>


            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}	

            


@endsection

@section('scripts')

<script>

CKEDITOR.replace('editor');

CKEDITOR.replace('editor1');

CKEDITOR.replace('editor2');

CKEDITOR.replace('editor3');

</script>

@endsection