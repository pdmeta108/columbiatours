@extends ('admin.layout')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de destinos <a href="destinos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('admin.destinos.search')
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
               @foreach ($destinos as $destino)
				<tr>
					<td>{{ $destino->id}}</td>
					<td>{{ $destino->destino}}</td>
					
					<td>
						<a href="{{URL::action('DestinosController@edit',$destino->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$destino->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('admin.destinos.modal')
				@endforeach
			</table>
		</div>
		{{$destinos->render()}}
	</div>
</div>

@endsection