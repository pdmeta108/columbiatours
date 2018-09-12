@extends ('layout')


@section ('body')
<body class="single-product travel_tour-page travel_tour">
@endsection

@section ('contenido')
<div class="wrapper-container">

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
				<h2 class="heading_primary">{{$paquetes->titulo}}</h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">

								<div class="tour_code">
									<strong>Code: </strong>LMJUYH
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span>{{$paquetes->dias}} Dias</span>
								</div>
								<div class="meta_values">
									<span></span>
									<div class="value">

	                 <a href="{{URL::action('PaquetesController@paquetes',$categorias->id)}}" rel="tag">{{$categorias->nombre}}</a>
									</div>
								</div>
								<div class="tour-share">
									<ul class="share-social">
										<li>
											<a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div id="slider" class="flexslider">
								<ul class="slides">
									@foreach ($imagenes as $imagen)
                                    <li>
										<a href="/img/{{ $imagen->url}}" class="swipebox" title=""><img width="950" height="700" src="/img/{{ $imagen->url}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									@endforeach
									</ul>
									</div>
									<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									@foreach ($imagenes as $imagen)
									<li>
										<img width="150" height="100" src="/img/{{ $imagen->url}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									@endforeach
								</ul>
							</div>


							<p>{{$paquetes->descripcion}}</p>


                           <div style="display:none;" class="lista">

							<?php echo ($paquetes->incluye); ?>
						</div>





							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab active" role="presentation">
										<a href="#tab-description" role="tab" data-toggle="tab">Incluye</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
								<a href="#tab-itinerary_tab" role="tab" data-toggle="tab">Itinerario</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
								<a href="#tab-hotel_prices_tab" role="tab" data-toggle="tab">Precios</a>
									</li>
									<li class="location_tab_tab" role="presentation">
										<a href="#tab-location_tab" role="tab" data-toggle="tab">T & C</a>
									</li>
									<li class="reviews_tab" role="presentation">
										<a href="#tab-reviews" role="tab" data-toggle="tab">Descargar Paquete</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">


										<table class="tours-tabs_table">
											<tbody>


<script type="text/javascript" src="/js/jquery.min.js"></script>
<script>
jQuery(".lista ul li").each(function(){
  var listado=jQuery(this);
 document.write("<tr><td><i class='fa fa-check icon-tick icon-tick--on'></i>"+listado.text()+ "</br></td></tr>");
     });
</script>


											</tbody>
										</table>

									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab" id="tab-itinerary_tab">
										{{-- <div class="interary-item">
											<p><span class="icon-left">1</span></p>
											<div class="item_content">
												<h2><strong>Day 1: Departure</strong></h2>
												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>
													Maecenas massa. Fermentum.</p>
												<ul>
													<li>Pretium vitae tempus sem enim enim.</li>
													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>
													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>
													<li>Vulputate dictumst egestas etiam dictum varius.</li>
												</ul>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">2</span></p>
											<div class="item_content">
												<h2><strong>Day 2</strong></h2>
												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">3</span></p>
											<div class="item_content">
												<h2><strong>Day 3</strong></h2>
												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">4</span></p>
											<div class="item_content">
												<h2><strong>Day 4</strong></h2>
												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">5</span></p>
											<div class="item_content">
												<h2><strong>Day 5</strong></h2>
												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">6</span></p>
											<div class="item_content">
												<h2><strong>Day 6: Return</strong></h2>
											</div>
										</div> --}}
										<div style="display:none;" class="lista2">
			 <?php echo ($paquetes->itinerario); ?>
		 </div>
		 <script>
		 jQuery(".lista2 ul li").each(function(i){
			 var listado2=jQuery(this);
			document.write("<div class=\"interary-item\"><p><span class=\"icon-left\">"+(i+1)+"</span></p><div class=\"item_content\"><p style=\"margin-top: 19px\">"+listado2.text()+"</p></div></div>");
					});
					i++;
		 </script>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-hotel_prices_tab">
										{{-- <div class="wrapper-gmap">
											<div id="googleMapCanvas" class="google-map" data-lat="50.893577" data-long="-1.393483" data-address="European Way, Southampton, United Kingdom"></div>
										</div> --}}
										<?php echo ($paquetes->precios); ?>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location_tab">
										{{-- <div class="wrapper-gmap">
											<div id="googleMapCanvas" class="google-map" data-lat="50.893577" data-long="-1.393483" data-address="European Way, Southampton, United Kingdom"></div>
										</div> --}}
										<?php echo ($paquetes->terminos); ?>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
										{{-- <div id="reviews" class="travel_tour-Reviews">
											<div id="comments">
												<h2 class="travel_tour-Reviews-title">1 review for
													<span>Kiwiana Panorama</span></h2>
												<ol class="commentlist">
													<li itemscope="" itemtype="http://schema.org/Review" class="comment byuser comment-author-physcode bypostauthor even thread-even depth-1" id="li-comment-62">
														<div id="comment-62" class="comment_container">
															<img alt="" src="images/avata.jpeg" class="avatar avatar-60 photo" height="60" width="60">
															<div class="comment-text">
																<div class="star-rating" title="Rated 4 out of 5">
																	<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
																</div>
																<p class="meta">
																	<strong>physcode</strong> –
																	<time datetime="2017-01-24T03:54:04+00:00">January 24, 2017</time>
																	:
																</p>
																<div class="description">
																	<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus</p>
																</div>
															</div>
														</div>
													</li>
												</ol>
											</div>
											<div id="review_form_wrapper">
												<div id="review_form">
													<div id="respond" class="comment-respond">
														<h3 id="reply-title" class="comment-reply-title">Add a review</h3>
														<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span> Required fields are marked
																<span class="required">*</span></p>
															<p class="comment-form-author"><label for="author">Name
																<span class="required">*</span></label>
																<input id="author" name="author" type="text" value="" size="30" required="">
															</p>
															<p class="comment-form-email"><label for="email">Email
																<span class="required">*</span></label>
																<input id="email" name="email" type="email" value="" size="30" required="">
															</p>
															<p class="comment-form-rating">
																<label>Your Rating</label>
															</p>
															<p class="stars">
																<span>
																	<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
 																 </span>
															</p>

															<p class="comment-form-comment">
																<label for="comment">Your Review
																	<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
															</p>
															<p class="form-submit">
																<input name="submit" type="submit" id="submit" class="submit" value="Submit">
															</p></form>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div> --}}
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus quam vel odio imperdiet, et viverra lorem tristique. Nullam sit amet dapibus turpis.</p>
									<div class="btn-descarga"><a href="{{url('download',$paquetes->file)}}">Descargar Paquete</a></div>
									</div>
								</div>
							</div>


						</div>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								<!-- www.123formbuilder.com script begins here -->
<script type="text/javascript" defer src="//www.123formbuilder.com/embed/4146899.js" data-role="form" data-default-width="367px"></script>
<!-- www.123formbuilder.com script ends here -->
								{{-- <div class="entry-content-tour">
									<p class="price">
										<span class="text">Price:</span><span class="travel_tour-Price-amount amount">$93.00</span>
									</p>
									<div class="clear"></div>
									<div class="booking">
										<div class="">
											<div class="form-block__title">
												<h4>Book the tour</h4>
											</div>
											<form id="tourBookingForm" method="POST" action="#">
												<div class="">
													<input name="first_name" value="" placeholder="First name" type="text">
												</div>
												<div class="">
													<input name="last_name" value="" placeholder="Last name" type="text">
												</div>
												<div class="">
													<input name="email_tour" value="" placeholder="Email" type="text">
												</div>
												<div class="">
													<input name="phone" value="" placeholder="Phone" type="text">
												</div>
												<div class="">
													<input type="text" name="date_book" value="" placeholder="Date Book" class="hasDatepicker">
												</div>
												<div class="from-group">
													<div class="total_price_arrow">
														<div class="st_adults_children">
															<span class="label">Adults</span>
															<div class="input-number-ticket">
																<input type="number" name="number_ticket" value="1" min="1" max="10" placeholder="Number ticket of Adults">
															</div>
															×
															$<span class="price_adults">93</span>
															=
															<span class="total_price_adults">$93</span>
														</div>
														<div class="st_adults_children">
															<span class="label">Children</span>
															<div class="input-number-ticket">
																<input type="number" name="number_children" value="0" min="0" max="10" placeholder="Number ticket of Children">
																<input type="hidden" name="price_child" value="65.1">
																<input type="hidden" name="price_child_set_on_tour" value="0">
															</div>
															×
															$<span class="price_children">65.1</span>
															=
															<span class="total_price_children">0</span>
														</div>
														<div>
															Total =
															<span class="total_price_adults_children">$93</span>
														</div>
														<input type="hidden" name="price_children_percent" value="70">
													</div>
												</div>
												<div class="spinner">
													<div class="rect1"></div>
													<div class="rect2"></div>
													<div class="rect3"></div>
													<div class="rect4"></div>
													<div class="rect5"></div>
												</div>
												<input class="btn-booking btn" value="Booking now" type="submit">
											</form>
										</div>
									</div>
									<div class="form-block__title custom-form-title"><h4>Or</h4></div>
									<div class="custom_from">
										<div role="form" class="wpcf7" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>
											<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">

												<p>Fill up the form below to tell us what you're looking for</p>
												<p>
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your name*">
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Email*">
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control" aria-invalid="false" placeholder="Message"></textarea>
													</span>
												</p>
												<p>
													<input type="submit" value="Send Enquiry" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
												</p>
											</form>
										</div>
									</div>
								</div> --}}
								<div class="widget-area align-left col-sm-3">
									<aside class="widget widget_travel_tour">

										<div class="wrapper-special-tours">

											@foreach ($destacados as $destacado)
											<div class="inner-special-tours">
							<a href="{{URL::action('PaquetesController@paquetedetalle',$destacado->id)}}">
				<img width="430" height="305" src="/img/{{ $destacado->imagen_url}}" alt="" title=""></a>

												<div class="post_title"><h3>
									<a href="single-tour.html" rel="bookmark">{{ $destacado->titulo}}</a>
												</h3></div>

											</div>
											@endforeach
										</div>

									</aside>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</div>




	@endsection





<tr>
<td><i class="fa fa-check icon-tick icon-tick--on"></i>
</td>
</tr>
