@extends ('layout')


@section ('body')
<body class="single-product contacto">
@endsection

@section ('contenido')

<div class="site wrapper-content">
	<div class="sub-header">

	<div class="top_site_main">
				<div class="banner-wrapper container article_heading">
					<div class="breadcrumbs-wrapper">
						<ul class="phys-breadcrumb">
							<li><a href="http://localhost:8000" class="home">Home</a></li>
							<li><a href="http://localhost:8000/seguros">Contacto</a></li>
							{{-- <li>Love advice from experts</li> --}}
						</ul>
					</div>
					<h2 class="heading_primary">CONTACTO</h2></div>
			</div>

	</div>
	
	<!--suscripcion-->
@include('partials.suscripcion')

		<div class="container">
			<div class="row">

		<!-- www.123formbuilder.com script begins here -->
		<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4112564.js" data-role="form" data-default-width="650px"></script>
		<!-- www.123formbuilder.com script ends here -->

</div>
</div>
	</div>

	@endsection
