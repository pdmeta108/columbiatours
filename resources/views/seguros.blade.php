@extends ('layout')


@section ('body')
<body class="single-product seguros">
@endsection

@section ('contenido')

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">

		@include('partials.provider')

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="banner-wrapper container article_heading">
					<div class="breadcrumbs-wrapper">
						{{-- <ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/seguros">Seguros</a></li>
							<li>Love advice from experts</li>
						</ul>
					</div>
					<h2 class="heading_primary">SEGUROS</h2> --}}
				</div>
			</div>
		</div>

			</div>

	</div>

	<!--suscripcion-->
@include('partials.suscripcion')

		<div class="container">
			<div class="row">
		Aqui la vista de los seguros
</div>
</div>
	</div>

	@endsection

	@section ('scripts')

	<script>
	jQuery('#twidget').twidget({
			locale: 'es',
			type: 'avia',
			marker: 11111,
			default_origin: 'PTY',
			default_destination: 'MIA'
	});

	document.getElementById("defaultOpen").click();
	</script>

	@endsection
