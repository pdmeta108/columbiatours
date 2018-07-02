@extends ('admin.layout')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de categorias <a href="categorias/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('admin.categorias.search')
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
               @foreach ($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id}}</td>
					<td>{{ $categoria->nombre}}</td>
					
					<td>
						<a href="{{URL::action('CategoriaController@edit',$categoria->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$categoria->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('admin.categorias.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection