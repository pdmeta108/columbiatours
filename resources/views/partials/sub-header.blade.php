<div class="sub-header">

<div class="top_site_main">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li><a href="blog.html">Business</a></li>
						<li>Love advice from experts</li>
					</ul>
				</div>
				<h2 class="heading_primary">PRUEBA</h2></div>
		</div>

<div class="slider-tour-booking">
				<div class="container">
					<div class="row travel-booking-search hotel-booking-search travel-booking-style_1">
						<div class="col-sm-3" style="padding-top: 14px;">
    <h1 style="color: #fff;">Busca tu destino</h1>
						</div>
		<div class="col-sm-8">
            
	{!! Form::open(array('url'=>'paquetes/destinos','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
            
							<ul class="hb-form-table">
								
								
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourdestino" class="form-control">
											@foreach ($destinos as $destino)
									<option value="{{ $destino->id }}" >{{ $destino->destino}}</option>
											@endforeach
										</select></div>
								</li>
								
								<li class="hb-submit">
									<button type="submit">Buscar Paquetes</button>
                                </li>
							</ul>
							<input type="hidden" name="lang" value="">

						{!!Form::close()!!}
					</div>
				  </div>
				</div>
			</div>

		<div id="suscripcion">
		<div class="row">
			<div class="col-sm-6 cotiza">
				<img src="/img/agente-icono.png"/><button type="button" class="btn btn-default"> 
				COTIZA CON</br>NUESTROS AGENTES
				</button>
			</div>
			<div class="col-sm-6 suscripcion">
		 <button type="button" class="btn btn-default">REGÍSTRATE</br>para recibir</br>las promociones</button>
				
			</div>
		</div>
	</div>

	

</div>


	