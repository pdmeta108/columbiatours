@extends ('layout')


@section ('body')
<body class="single-product cruceros">
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
							<ul class="phys-breadcrumb">
								<li><a href="http://localhost:8000" class="home">Home</a></li>
								<li><a href="http://localhost:8000/cruceros">Cruceros</a></li>
								{{-- <li>Love advice from experts</li> --}}
							</ul>
						</div>
						<h2 class="heading_primary">CRUCEROS</h2></div>
				</div>
		</div>

	</div>

	</div>

	<!--suscripcion-->
	<section class="suscripcion-bg">
			<div class="row">
				<div class="col-sm-6 cotiza">
					<div class="col-sm-12 col-md-6">
							<img src="/img/agente-icono.png"/>
					</div>
					<div class="col-sm-12 col-md-6">
						<h3>COTIZA CON </h3>
						<h3>NUESTROS AGENTES</h3>
						<button type="button" class="btn btn-default btn-billing">

<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4115948.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="COTIZAR"></script>
<!-- www.123formbuilder.com script ends here -->

						</button>
					</div>
				</div>
				<div class="col-sm-6 suscripcion-m">
					<div class="col-sm-12 col-md-6">
					<!-- www.123formbuilder.com script begins here -->
					{{-- <h3>Listado de paquetes</h3> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Nuevo</button> --}}

					<h3>REGÍSTRATE PARA RECIBIR</h3>
					<h3>NUESTRAS PROMOCIONES</h3>
					<button type="button" class="btn btn-default btn-suscription">

	<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4112564.js?type=lightbox" data-role="form" data-default-width="650px" data-embed-type="lightbox-text-link" data-embed-text-link="REG&Iacute;STRATE"></script>
					</button>
					{{-- @include('partials.modal.suscripcionmod') --}}
	<!-- www.123formbuilder.com script ends here -->
					</div>
					<div class="col-sm-12 col-md-6">
						<img src="/img/mano.png"/>
					</div>
				</div>
			</div>
	</section>

		<div class="container">
			<div class="row">
		@foreach ($cruceros as $crucero)
<div class="col-sm-3">
	<a href="{{URL::action('PaquetesController@crucerospaquetes',$crucero->id)}}">
<img  src="/img/{{$crucero->imagen_url}}" alt="" title="">
</a>
</div>
@endforeach
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
