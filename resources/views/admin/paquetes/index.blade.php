@extends ('admin.layout')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de paquetes <a href="paquetes/create"><button class="btn btn-success">Nuevo</button></a></h3>
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