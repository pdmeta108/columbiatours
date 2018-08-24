@extends ('layout')


@section ('body')
<body class="single-product cruceros">
@endsection

@section ('contenido')

<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li><a href="blog.html">Business</a></li>
						<li>Love advice from experts</li>
					</ul>
				</div>
				<h2 class="heading_primary">CRUCEROS</h2></div>
		</div>
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