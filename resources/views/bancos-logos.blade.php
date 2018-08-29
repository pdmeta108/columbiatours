@extends ('layout')
@section ('contenido')
<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li>Tours</li>
					</ul>
				</div>
				<h1 class="heading_primary">Tours</h1></div>
		</div>
<section class="bancos-logos">
			<div class="container">
				<div class="row">
					
@foreach ($bancos as $banco)
<div class="col-sm-3">
	<a href="{{URL::action('PaquetesController@bancospaquetes',$banco->id)}}">
<img  src="/img/{{$banco->url}}" alt="" title="">
</a>
</div>
@endforeach 

					
				</div>
			</div>
</section>
</div>

@endsection