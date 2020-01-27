@extends('frontend.layouts.master')
@section('content')
<style>
	.discount {
		text-align: left;
	}
</style>
<!--  wrapper  -->
<div id="wrapper">
	<!-- content-->
	<div class="content">
		<!--  section  -->
		<section class="parallax-section single-par" data-scrollax-parent="true">
			<div class="bg par-elem "  data-bg="http://easybook.kwst.net/images/bg/26.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
			<div class="overlay"></div>
			<div class="container">
				<div class="section-title center-align big-title">
					<div class="section-title-separator"><span></span></div>
					<h2><span>New York Hotels</span></h2>
					<span class="section-separator"></span>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
				</div>
			</div>
			<div class="header-sec-link">
				<div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
			</div>
		</section>
		<!--  section  end-->
		<div class="breadcrumbs-fs fl-wrap">
			<div class="container">
				<div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listing </a><span>Fullwidth Map</span></div>
			</div>
		</div>
		<!--  section-->
		<section class="grey-blue-bg small-padding" id="sec1">
			<div class="container">
				<div class="row">
					<!--filter sidebar -->
					<div class="col-md-4">
						<div class="mobile-list-controls fl-wrap">
							<div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter</div>
						</div>
						<div class="fl-wrap filter-sidebar_item fixed-bar">
							<div class="filter-sidebar fl-wrap lws_mobile">
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
									<label>City/Category</label>
									<div class="listsearch-input-item">
										<select data-placeholder="City" class="chosen-select" >
											<option>All Cities</option>
											<option>New York</option>
											<option>London</option>
											<option>Paris</option>
											<option>Kiev</option>
											<option>Moscow</option>
											<option>Dubai</option>
											<option>Rome</option>
											<option>Beijing</option>
										</select>
									</div>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item fl-wrap location autocomplete-container">
									<label>Destination</label>
									<span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
									<input type="text" placeholder="Destination or Hotel Name" class="autocomplete-input" id="autocompleteid3" value=""/>
									<a href="#"><i class="fal fa-dot-circle"></i></a>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item in-loc-dec date-container  fl-wrap">
									<label>Date In-Out </label>
									<span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
									<input type="text"   placeholder="When" name="dates"   value=""/>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item fl-wrap">
									<div class="quantity-item">
										<label>Rooms</label>
										<div class="quantity">
											<input type="number" min="1" max="3" step="1" value="1">
										</div>
									</div>
									<div class="quantity-item">
										<label>Adults</label>
										<div class="quantity">
											<input type="number" min="1" max="5" step="1" value="1">
										</div>
									</div>
									<div class="quantity-item">
										<label>Children</label>
										<div class="quantity">
											<input type="number" min="0" max="3" step="1" value="0" id="total-child">
										</div>
									</div>
									<!-- Children Age -->
									<div class="quantity-item hide age-items" id="age-1">
									  <div class="quantity">
									    <select>
									      <option>0 years</option>
									      <option>1 years</option>
									      <option>2 years</option>
									      <option>3 years</option>
									      <option>4 years</option>
									      <option>5 years</option>
									      <option>6 years</option>
									    </select>
									  </div>
									</div>
									<div class="quantity-item hide age-items" id="age-2">
									  <div class="quantity">
									    <select>
									      <option>0 years</option>
									      <option>1 years</option>
									      <option>2 years</option>
									      <option>3 years</option>
									      <option>4 years</option>
									      <option>5 years</option>
									      <option>6 years</option>
									    </select>
									  </div>
									</div>
									<div class="quantity-item hide age-items" id="age-3">
									  <div class="quantity">
									    <select>
									      <option>0 years</option>
									      <option>1 years</option>
									      <option>2 years</option>
									      <option>3 years</option>
									      <option>4 years</option>
									      <option>5 years</option>
									      <option>6 years</option>
									    </select>
									  </div>
									</div>
									<div class="quantity-item hide age-items" id="age-4">
									  <div class="quantity">
									    <select>
									      <option>0 years</option>
									      <option>1 years</option>
									      <option>2 years</option>
									      <option>3 years</option>
									      <option>4 years</option>
									      <option>5 years</option>
									      <option>6 years</option>
									    </select>
									  </div>
									</div>
									<div class="quantity-item hide age-items" id="age-5">
									  <div class="quantity">
									    <select>
									      <option>0 years</option>
									      <option>1 years</option>
									      <option>2 years</option>
									      <option>3 years</option>
									      <option>4 years</option>
									      <option>5 years</option>
									      <option>6 years</option>
									    </select>
									  </div>
									</div>
									<!-- Children Age -->
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item fl-wrap">
									<div class="range-slider-title">Price range</div>
									<div class="range-slider-wrap fl-wrap">
										<input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
									</div>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item fl-wrap">
									<label>Star Rating</label>
									<div class="search-opt-container fl-wrap">
										<!-- Checkboxes -->
										<ul class="fl-wrap filter-tags">
											<li class="five-star-rating">
												<input id="check-aa2" type="checkbox" name="check" checked>
												<label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Stars</span></span></label>
											</li>
											<li class="four-star-rating">
												<input id="check-aa3" type="checkbox" name="check">
												<label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Star</span></span></label>
											</li>
											<li class="three-star-rating">
												<input id="check-aa4" type="checkbox" name="check">
												<label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Star</span></span></label>
											</li>
										</ul>
										<!-- Checkboxes end -->
									</div>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item -->
								<div class="col-list-search-input-item fl-wrap">
									<label>Facility</label>
									<div class="search-opt-container fl-wrap">
										<!-- Checkboxes -->
										<ul class="fl-wrap filter-tags half-tags">
											<li>
												<input id="check-aaa5" type="checkbox" name="check" checked>
												<label for="check-aaa5">Free WiFi</label>
											</li>
											<li>
												<input id="check-bb5" type="checkbox" name="check">
												<label for="check-bb5">Parking</label>
											</li>
											<li>
												<input id="check-dd5" type="checkbox" name="check">
												<label for="check-dd5">Fitness Center</label>
											</li>
										</ul>
										<!-- Checkboxes end -->
										<!-- Checkboxes -->
										<ul class="fl-wrap filter-tags half-tags">
											<li>
												<input id="check-ff5" type="checkbox" name="check">
												<label for="check-ff5">Airport Shuttle</label>
											</li>
											<li>
												<input id="check-cc5" type="checkbox" name="check" checked>
												<label for="check-cc5">Non-smoking Rooms</label>
											</li>
											<li>
												<input id="check-c4" type="checkbox" name="check" checked>
												<label for="check-c4">Air Conditioning</label>
											</li>
										</ul>
										<!-- Checkboxes end -->
									</div>
								</div>
								<!--col-list-search-input-item end-->
								<!--col-list-search-input-item  -->
								<div class="col-list-search-input-item fl-wrap">
									<button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
								</div>
								<!--col-list-search-input-item end-->
							</div>
						</div>
					</div>
					<!--filter sidebar end-->
					<!--listing -->
					<div class="col-md-8">
						<!--col-list-wrap -->
						<div class="col-list-wrap fw-col-list-wrap post-container">
							<!-- list-main-wrap-->
							<div class="list-main-wrap fl-wrap card-listing">
								<!-- list-main-wrap-opt-->
								<div class="list-main-wrap-opt fl-wrap">
									<div class="list-main-wrap-title fl-wrap col-title">
										<h2>All Hotels</h2>
									</div>
									<!-- price-opt-->
									<!-- <div class="price-opt">
										<span class="price-opt-title">Sort results by:</span>
										<div class="listsearch-input-item">
											<select data-placeholder="Popularity" class="chosen-select no-search-select" >
												<option>Popularity</option>
												<option>Average rating</option>
												<option>Price: low to high</option>
												<option>Price: high to low</option>
											</select>
										</div>
									</div> -->
									<!-- price-opt end-->
									<!-- price-opt-->
									<div class="grid-opt">
										<ul>
											<li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
											<li><span class="one-col-grid"><i class="fas fa-bars"></i></span></li>
										</ul>
									</div>
									<!-- price-opt end-->
								</div>
								<!-- list-main-wrap-opt end-->
								<!-- listing-item-container -->
									<div class="listing-item-container init-grid-items fl-wrap" id="show-hotel">
										<!-- listing-item  -->
										@foreach($hotels as $hotel)
										<?php
										$image = $hotel->photo_1;
										$image = substr($image,37);
										$hotel_image = url('http://tour2thailand.com/images/hotels'.$image);
										$decription='';
										if ($hotel->decription_en !='') {
											$decription =$hotel->decription_en->description;
										}
										// print_r($hotel_image); die;
										?>
										<div class="listing-item">
											<article class="geodir-category-listing fl-wrap">
												<div class="geodir-category-img">
													<a href="{{url('hotel-detail/'.$hotel->hid)}}">
														@if($image !="")
														<img src="{{url($hotel_image)}}" alt="" style="height:270px; overflow:hidden;">
														@else
														<img src="{{asset('frontend-assets/no-image.jpeg')}}" alt=""style="height:270px;">
														@endif
													</a>
													<div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
														<span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
													</div>
													<!-- <div class="sale-window">Sale 20%</div> -->
													<!-- <div class="sale-window big-sale">Sale 50%</div> -->
													<!-- <div class="geodir-category-opt">
													<div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
													<div class="rate-class-name">
													<div class="score"><strong>Very Good</strong>27 Reviews </div>
													<span>5.0</span>
												</div>
											</div> -->
										</div>
										<div class="geodir-category-content fl-wrap title-sin_item">
											<div class="geodir-category-content-title fl-wrap">
												<div class="geodir-category-content-title-item">
													<h3 class="title-sin_map"><a href="{{url('hotel-detail/'.$hotel->hid)}}">{{$hotel->name}}</a></h3>
													<div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> {{Str::limit($hotel->address,80)}}</a></div>
												</div>
											</div>
											<div class="" style="height:140px;">
												<p>{{Str::limit($decription,115)}}</p>
											</div>
											<!-- <ul class="facilities-list fl-wrap">
												<li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
												<li><i class="fal fa-parking"></i><span>Parking</span></li>
												<li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
												<li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
											</ul> -->
											<div class="geodir-category-footer fl-wrap">
												<div class="discount">@if($hotel->discount) Discount <span style="color: #f9b90f;">{{$hotel->discount}}%</span>@endif</div>
												<div class="geodir-category-price">Awg/Night <span>$ {{$hotel->low_rate}}</span></div>
												<div class="geodir-opt-list">


													<a href="#" class="single-map-item" data-newlatitude="{{Booking::DMStoDD($hotel->latitude)}}" data-newlongitude="{{Booking::DMStoDD($hotel->longitude)}}"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
													<a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
													<!-- <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a> -->
												</div>
											</div>
										</div>
									</article>
								</div>
								@endforeach
								<!-- listing-item end -->

								<!-- listing-item  -->
								<!-- <div class="listing-item">
								<article class="geodir-category-listing fl-wrap">
								<div class="geodir-category-img">
								<a href="{{url('/detail')}}"><img src="http://easybook.kwst.net/images/gal/4.jpg" alt=""></a>
								<div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
								<span class="avatar-tooltip">Added By  <strong>Julie Cramp</strong></span>
							</div>
							<div class="sale-window big-sale">Sale 50%</div>
							<div class="geodir-category-opt">
							<div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
							<div class="rate-class-name">
							<div class="score"><strong>Good</strong>12 Reviews </div>
							<span>4.2</span>
						</div>
					</div>
				</div>
				<div class="geodir-category-content fl-wrap title-sin_item">
				<div class="geodir-category-content-title fl-wrap">
				<div class="geodir-category-content-title-item">
				<h3 class="title-sin_map"><a href="listing-single.html">Grand Hero Palace</a></h3>
				<div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
			</div>
		</div>
		<p> Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
		<ul class="facilities-list fl-wrap">
		<li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
		<li><i class="fal fa-parking"></i><span>Parking</span></li>
		<li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
		<li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
	</ul>
	<div class="geodir-category-footer fl-wrap">
	<div class="geodir-opt-link">
	<div class="geodir-category-price">Awg/Night <span>$ 120</span></div>
</div>
<div class="geodir-opt-list">
<a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
<a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
<a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
</div>
</div>
</div>
</article>
</div> -->
<!-- listing-item end -->

								<!-- listing-item  -->
<!-- <div class="listing-item">
<article class="geodir-category-listing fl-wrap">
<div class="geodir-category-img">
<a href="{{url('/detail')}}"><img src="http://easybook.kwst.net/images/gal/4.jpg" alt=""></a>
<div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
<span class="avatar-tooltip">Added By  <strong>Julie Cramp</strong></span>
</div>
<div class="sale-window big-sale">Sale 50%</div>
<div class="geodir-category-opt">
<div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
<div class="rate-class-name">
<div class="score"><strong>Good</strong>12 Reviews </div>
<span>4.2</span>
</div>
</div>
</div>
<div class="geodir-category-content fl-wrap title-sin_item">
<div class="geodir-category-content-title fl-wrap">
<div class="geodir-category-content-title-item">
<h3 class="title-sin_map"><a href="listing-single.html">Grand Hero Palace</a></h3>
<div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
</div>
</div>
<p> Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
<ul class="facilities-list fl-wrap">
<li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
<li><i class="fal fa-parking"></i><span>Parking</span></li>
<li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
<li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
</ul>
<div class="geodir-category-footer fl-wrap">
<div class="geodir-opt-link">
<div class="geodir-category-price">Awg/Night <span>$ 120</span></div>
</div>
<div class="geodir-opt-list">
<a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
<a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
<a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
</div>
</div>
</div>
</article>
</div> -->
<!-- listing-item end -->
<div id="remove-row" class="">
	<button id="btn-more" data-id="{{$hotel->hid}}" class="load-more-button" href="javascript:void(0)">Load more <i class="fal fa-spinner" style="display:none;"></i> </button>
</div>
</div>
<!-- listing-item-container end-->

</div>
	<!-- list-main-wrap end-->
</div>
<!--col-list-wrap end -->
</div>
<!--listing  end-->
</div>
<!--row end-->
</div>
<div class="limit-box fl-wrap"></div>
</section>
</div>
<!-- content end-->
</div>
<!--wrapper end -->
@endsection
@section('script')
<script>
$(document).ready(function(){
	 $(document).on('click','#btn-more',function(){
			 var id = $(this).data('id');
			 // alert(id);
			 $(".fa-spinner").show();
			 $.ajax({
					 url : '{{ url("listing-ajax") }}',
					 method : "POST",
					 data : {id:id,_token:"{{csrf_token()}}"},
					 dataType : "text",
					 success : function (data)
					 {
							if(data != '')
							{
									$('#remove-row').remove();
									$('#show-hotel').append(data);
							}
							else
							{
									$('#btn-more').html("No Data");
							}
							$('#gifid').hide();

					 }
			 });
		 // }
	 });
 });

</script>
@endsection
