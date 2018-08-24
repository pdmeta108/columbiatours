@extends ('admin.layout')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de paquetes</h3> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Nuevo</button>
		@include('admin.paquetes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descripción</th>
					<!--<th>Opciones</th>-->
				</thead>
               @foreach ($paquetes as $paquete)
				<tr>
					<td>{{ $paquete->id}}</td>
					<td>{{ $paquete->titulo}}</td>
					<td>{{ $paquete->descripcion}}</td>
					<td>
						<a href="{{URL::action('PaquetesController@edit',$paquete->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$paquete->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('admin.paquetes.modal')
				@endforeach
			</table>
		</div>
		{{$paquetes->render()}}
	</div>
</div>

@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear nuevo paquete</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('url'=>'admin/paquetes','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="titulo">titulo</label>
            	<input type="text" name="titulo" class="form-control" placeholder="titulo...">
            </div>
            <button class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            {!!Form::close()!!}	
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Guardar</button>
      </div>-->
    </div>
  </div>
</div>