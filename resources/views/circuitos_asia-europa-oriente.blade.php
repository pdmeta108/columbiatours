@extends ('layout')


@section ('body')
<body class="single-product circuito-page">
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
							<li><a href="http://localhost:8000/circuitos">Circuitos</a></li>
							{{-- <li>Love advice from experts</li> --}}
						</ul>
					</div>
					<h2 class="heading_primary">CIRCUITOS ASIA-EUROPA-ORIENTE</h2></div>
			</div>
		</div>
			</div>

	</div>
	@include('partials.suscripcion')

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum faucibus lorem, ultrices ullamcorper tellus cursus vitae. Vestibulum tincidunt aliquam neque. In hac habitasse platea dictumst. Ut vitae sodales felis. Maecenas risus tellus, dapibus eget dignissim eu, consequat vitae mauris. Quisque ornare est in nibh lobortis, nec imperdiet leo faucibus. Curabitur hendrerit luctus iaculis. Pellentesque ex quam, tempor eget felis ut, mollis auctor est. Praesent sodales sapien vel metus accumsan consequat. Praesent euismod vulputate ex sed fringilla. Sed ut magna ac orci porttitor tempor commodo non libero. Vivamus iaculis, lorem tempor varius vehicula, nulla mauris bibendum nunc, id accumsan quam nisi non purus. Proin interdum pellentesque accumsan. Vivamus bibendum quam vitae efficitur lobortis.

Nulla ornare sit amet nisl in sodales. Integer augue dui, fermentum a ornare sed, tempor non ex. Quisque non nulla a tortor rutrum ultricies in vel nulla. Sed vestibulum ligula tellus, non semper turpis luctus non. Nunc vel posuere neque. Aliquam tincidunt tortor et elit faucibus, a posuere massa rhoncus. Etiam sed pretium dui. Integer mollis tincidunt placerat. Sed id ornare nisl.

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
