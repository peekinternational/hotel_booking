@extends('frontend.layouts.master')
@section('content')
<style>
.calc-div {
  text-align: left;
}
.calc-div h5{
  font-size: 12px;
 /* color: #46A5DC; */
}
.calc-div p{
  font-size: 12px;
 /* color: #46A5DC; */
}
.calc-div h4 span{
  color: #696363;
  float: right;
}
.text-muted {
  color: #acacac;
}
</style>
<!--  wrapper  -->
<div id="wrapper">
  <!-- content-->
  <div class="content">
    <!--  section  -->
    <?php
    $parms=explode('?',Request::fullUrl());
    $image = $hotel->photo_1;
    $image = substr($image,37);
    $base_path_mod = str_replace('\\', '/', $image);
    $hotel_image ='http://tour2thailand.com/images/hotels'.$base_path_mod;
    $hotel_image2=urldecode($hotel_image);
    // print_r($parms[1]); die;
     ?>
    <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
      <!-- <div class="bg par-elem "  data-bg="images/bg/9.jpg" data-scrollax="properties: { translateY: '30%' }"></div> -->
      <div class="bg par-elem " style="background-image: url(<?php echo trim($hotel_image); ?>)" data-bg="{{url($hotel_image)}}" data-scrollax="properties: { translateY: '30%' }"></div>
      <div class="list-single-hero-title fl-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="listing-rating-wrap">
              @if($hotel->rate == '2*')
                 <div class="listing-rating card-popup-rainingvis" data-starrating2="2"></div>
              @elseif($hotel->rate == '3*')
                 <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
              @elseif($hotel->rate == '4*')
                 <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
              @else
                 <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
              @endif

              </div>
              <h2><span>{{$hotel->name}}</span></h2>
              <div class="list-single-header-contacts fl-wrap">
                <ul>
                  <li><i class="far fa-phone"></i><a  href="#">{{$hotel->phone_1}}</a></li>
                  <li><i class="far fa-map-marker-alt"></i><a  href="#">{{$hotel->address}}</a></li>
                  <li><i class="far fa-envelope"></i><a  href="#">{{$hotel->email_primary}}</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-5">
              <!--  list-single-hero-details-->
              <div class="list-single-hero-details fl-wrap">
                <!--  list-single-hero-rating
                <div class="list-single-hero-rating">
                  <div class="rate-class-name">
                    <div class="score"><strong>Very Good</strong>2 Reviews </div>
                    <span>4.5</span>
                  </div>

                  <div class="list-single-hero-rating-list">

                    <div class="rate-item fl-wrap">
                      <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                      <div class="rate-item-bg" data-percent="100%">
                        <div class="rate-item-line color-bg"></div>
                      </div>
                      <div class="rate-item-percent">5.0</div>
                    </div>


                    <div class="rate-item fl-wrap">
                      <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                      <div class="rate-item-bg" data-percent="90%">
                        <div class="rate-item-line color-bg"></div>
                      </div>
                      <div class="rate-item-percent">5.0</div>
                    </div>

                    <div class="rate-item fl-wrap">
                      <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                      <div class="rate-item-bg" data-percent="80%">
                        <div class="rate-item-line color-bg"></div>
                      </div>
                      <div class="rate-item-percent">4.0</div>
                    </div>

                    <div class="rate-item fl-wrap">
                      <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                      <div class="rate-item-bg" data-percent="90%">
                        <div class="rate-item-line color-bg"></div>
                      </div>
                      <div class="rate-item-percent">4.5</div>
                    </div>

                  </div>

                </div>
                <!--  list-single-hero-rating  end-->
                <div class="clearfix"></div>
                <!--
                <div class="list-single-hero-links">
                  <a class="lisd-link" href="booking-single.html"><i class="fal fa-bookmark"></i> Book Now</a>
                  <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add review</a>
                </div>-->
              </div>
              <!--  list-single-hero-details  end-->
            </div>
          </div>
          <div class="breadcrumbs-hero-buttom fl-wrap">
            <div class="breadcrumbs"><a href="#">Home</a><a href="#">Listings</a><a href="#">{{$hotel->city}}</a><span>Listing Single</span></div>
            <!-- <div class="list-single-hero-price">AWG/NIGHT<span>$ 320</span></div> -->
          </div>
        </div>
      </div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
      <!--  scroll-nav-wrapper  -->
      <div class="scroll-nav-wrapper fl-wrap">
        <div class="hidden-map-container fl-wrap">
          <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
          <div class="map-container">
            <!-- <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div> -->
            @if($hotel->latitude)
            <div id="singleMap" data-latitude="{{Booking::DMStoDD($hotel->latitude)}}" data-longitude="{{Booking::DMStoDD($hotel->longitude)}}"></div>
            @endif
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
          <nav class="scroll-nav scroll-init">
            <ul>
              <li><a class="act-scrlink" href="#sec1">Top</a></li>
              <li><a href="#sec2">Details</a></li>
              <!-- <li><a href="#sec3">Amenities</a></li> -->
              <li><a href="#sec4">Rooms</a></li>
              <!-- <li><a href="#sec5">Reviews</a></li> -->
            </ul>
          </nav>
          <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>
        </div>
      </div>
      <!--  scroll-nav-wrapper end  -->
      <!--   container  -->
      <div class="container">
        <!--   row  -->
        <div class="row">
          <!--   datails -->
          <div class="col-md-8">
            <div class="list-single-main-container ">
              <!-- fixed-scroll-column  -->
              <div class="fixed-scroll-column">
                <div class="fixed-scroll-column-item fl-wrap">
                  <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>
                  <div class="share-holder fixed-scroll-column-share-container">
                    <div class="share-container  isShare"></div>
                  </div>
                  <!-- <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a> -->
                  <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>
                  <a class="fc-button" href="booking-single.html"><i class="far fa-bookmark"></i> <span> Book Now </span></a>
                </div>
              </div>
              <!-- fixed-scroll-column end   -->
              <div class="list-single-main-media fl-wrap">
                <!-- gallery-items   -->
                <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                  <!-- 1 -->
                  <?php $show_photos=0; ?>
                  @foreach($hotel_gallery as $key => $gallery)
                  <?php
                  $gallery = $gallery->photos->photo;
                 // print_r($gallery); die;
                  $galleris = substr($gallery,37);
                   $galleris_path_mod = str_replace('\\', '/', $galleris);
                  //print_r($base_path_mod); die;
                  $gallery_img = 'http://tour2thailand.com/images/hotels'.$galleris_path_mod;

                   ?>
                  <div class="gallery-item ">
                    <div class="grid-item-holder">
                      <div class="box-item">
                        <img  src="{{$gallery_img}}"   alt="">
                        <a href="{{$gallery_img}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                      </div>
                    </div>
                  </div>
                  @if($key == 10)
                  <?php $show_photos = $key; ?>
                  @break
                  @endif
                  @endforeach
                  <!-- 7 -->
                  <div class="gallery-item">
                    <div class="grid-item-holder">
                      @if($show_photos !=0)
                      <div class="box-item">
                        <?php
                        $count_gallery = count($hotel_gallery);
                        $other = $count_gallery-$show_photos;
                        $gall = $hotel_gallery[11]->photos->photo;
                        $galls = substr($gall,37);
                         $base_path = str_replace('\\', '/', $galls);
                        $gallery_image = 'http://tour2thailand.com/images/hotels'.$base_path;
                        // print_r($other); die;

                         ?>
                        <img  src="{{$gallery_image}}"   alt="">
                        <!-- <div class="more-photos-button dynamic-gal"  data-dynamicPath="[{'src': 'images/gal/2.jpg'}, {'src': 'images/gal/8.jpg'},{'src': 'images/gal/1.jpg'}]">Other <span>{{$other}} photos</span><i class="far fa-long-arrow-right"></i></div> -->
                        <div class="more-photos-button dynamic-gal"  data-dynamicPath="[@for($i = 11; $i < $count_gallery; $i++)
                        <?php
                        $gal = $hotel_gallery[$i]->photos->photo;
                        $gals = substr($gal,37);
                         $gals_path_mod = str_replace('\\', '/', $gals);
                        $other_image = 'http://tour2thailand.com/images/hotels/'.$gals_path_mod;
                        // print_r($gal);
                         ?>
                         {'src':'{{$other_image}}'}, @endfor]">Other <span>{{$other}} photos</span><i class="far fa-long-arrow-right"></i></div>
                        <!-- <a href="{{url($gallery_img)}}" class="gal-link popup-image"><i class="fa fa-search"></i></a> -->
                      </div>
                      @endif
                    </div>
                  </div>
                  <!-- 7 end -->
                </div>
                <!-- end gallery items -->
              </div>
              <!-- list-single-header end -->
              <div class="list-single-facts fl-wrap">
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <i class="fal fa-bed"></i>
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <?php echo count($rooms); ?>
                      </div>
                    </div>
                    <h6>Hotel Rooms</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <i class="fal fa-users"></i>
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        2557
                      </div>
                    </div>
                    <h6>Customers Every Year</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <i class="fal fa-taxi"></i>
                    @foreach($hotel_distance as $dist)
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        {{$dist->distance}}
                      </div>
                    </div>
                    <h6>Distance to {{$dist->to_point}}</h6><br>
                    @endforeach
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <i class="fal fa-cocktail"></i>
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <!-- 4 -->
                      </div>
                    </div>
                    <h6>Restaurant Available</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
              </div>
              <!--   list-single-main-item -->
              <div class="list-single-main-item fl-wrap">
                <div class="list-single-main-item-title fl-wrap">
                  <h3>About Hotel </h3>
                </div>
                @foreach($hotel_decription_en as $desc)
                <h4>{{$desc->title}}</h4>
                @if($desc->description)
                <p>{{$desc->description}}</p>
                @endif
                @endforeach
                  <!-- <a href="https://vimeo.com/70851162" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a> -->
              </div>
              <!--   list-single-main-item end -->
              <!--   list-single-main-item -->
              <!-- <div class="list-single-main-item fl-wrap" id="sec3">
                <div class="list-single-main-item-title fl-wrap">
                  <h3>Amenities</h3>
                </div>
                <div class="listing-features fl-wrap">
                  <ul>
                    <li><i class="fal fa-rocket"></i> Elevator in building</li>
                    <li><i class="fal fa-wifi"></i> Free Wi Fi</li>
                    <li><i class="fal fa-parking"></i> Free Parking</li>
                    <li><i class="fal fa-snowflake"></i> Air Conditioned</li>
                    <li><i class="fal fa-plane"></i>Airport Shuttle</li>
                    <li><i class="fal fa-paw"></i> Pet Friendly</li>
                    <li><i class="fal fa-utensils"></i> Restaurant Inside</li>
                    <li><i class="fal fa-wheelchair"></i> Wheelchair Friendly</li>
                  </ul>
                </div>
                <span class="fw-separator"></span>
                <div class="list-single-main-item-title no-dec-title fl-wrap">
                  <h3>Tags</h3>
                </div>
                <div class="list-single-tags tags-stylwrap">
                  <a href="#">Hotel</a>
                  <a href="#">Hostel</a>
                  <a href="#">Room</a>
                  <a href="#">Spa</a>
                  <a href="#">Restourant</a>
                  <a href="#">Parking</a>
                </div>
              </div> -->
              <!--   list-single-main-item end -->
              <!-- accordion-->
              <div class="accordion mar-top">
                <a class="toggle act-accordion" href="#"> Location   <span></span></a>
                <div class="accordion-inner visible">
                  <div class="row">
                    <div class="col-md-3">
                      Address:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->address}}</p>
                    </div>
                    <div class="col-md-3">
                      Post Code:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->postal_code}}</p>
                    </div>
                    <div class="col-md-3">
                      City:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->city}}</p>
                    </div>
                    <div class="col-md-3">
                      State:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->state_province}}</p>
                      @if($hotel->state_province == "")
                      <br>
                      @endif
                    </div>
                    <div class="col-md-3">
                      Country:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->country}}</p>
                    </div>
                  </div>


                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p> -->
                </div>
                <a class="toggle" href="#"> Contact Details <span></span></a>
                <div class="accordion-inner">
                  <div class="row">
                    <div class="col-md-3">
                      Reservation Email:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->email_reservation}}</p>
                    </div>
                    <div class="col-md-3">
                      General Manger Email:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->email_general_manager}}</p>
                    </div>
                    <div class="col-md-3">
                      FAX:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->fax_hotel}}</p>
                    </div>
                    <div class="col-md-3">
                      Reservation FAX:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->fax_reservation}}</p>
                    </div>
                    <div class="col-md-3">
                      General Manger FAX:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->fax_general}}</p>
                    </div>
                    <div class="col-md-3">
                      Website:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->web_address}}</p>
                    </div>
                  </div>
                </div>
                <a class="toggle" href="#"> Reservation Conditions  <span></span></a>
                <div class="accordion-inner">
                  <div class="row">
                    <div class="col-md-3">
                      Payment Condition:
                    </div>
                    <div class="col-md-9">
                      <p>{{$hotel->payment_conditions}}</p>
                      @if($hotel->payment_conditions =="")
                      <br>
                      @endif
                    </div>
                    <div class="col-md-3">
                      Child Allow:
                    </div>
                    <div class="col-md-9">
                      @if($hotel->child_permitted ==0)
                      <p>YES</p>
                      @else
                      <p>No</p>
                      @endif
                    </div>
                    <div class="col-md-3">
                      Child Age Limit From:
                    </div>
                    <div class="col-md-9">
                      <p>{{round($hotel->child_age_from)}}</p>
                    </div>
                    <div class="col-md-3">
                      Child Age Limit To:
                    </div>
                    <div class="col-md-9">
                      <p>{{round($hotel->child_age_to)}}</p>
                    </div>
                  </div>
                </div>
                @if($hotel_remarks->count() != '')
                <a class="toggle" href="#"> Remarks  <span></span></a>
                <div class="accordion-inner">
                  <h5>Remarks</h5>
                  @foreach($hotel_remarks as $remark)
                  <p>{{$remark->remarks}}</p>
                  @endforeach
                </div>
                @endif
              </div>
              <!-- accordion end -->
              <!--   list-single-main-item -->
              <div class="list-single-main-item fl-wrap" id="sec4">
                <div class="list-single-main-item-title fl-wrap">
                  <h3>Available Rooms</h3>
                </div>
                <!--   rooms-container -->
                <div class="rooms-container fl-wrap">
                  <!--  rooms-item -->
                  @foreach($rooms as $room)
                  <?php
                  if ($room->photos !="") {
                  $room_image = $room->photos->photo_1;
                  $room_image = substr($room_image,37);
                  $room_images = 'http://tour2thailand.com/images/hotels'.$room_image;
                  // print_r($room_image); die;
                }

                   ?>
                  <div class="rooms-item fl-wrap">
                    <div class="rooms-media">
                      @if($room->photos !='')
                      <img src="{{$room_images}}" alt="">
                      @else
                      <img src="{{asset('frontend-assets/no-image.jpeg')}}" alt="">
                      @endif
                      <!-- <div class="dynamic-gal more-photos-button" data-dynamicPath="[{'src': 'images/gal/slider/1.jpg'}, {'src': 'images/gal/slider/2.jpg'},{'src': 'images/gal/slider/3.jpg'}]">  View Gallery <span>3 photos</span> <i class="far fa-long-arrow-right"></i></div> -->
                    </div>
                    <div class="rooms-details">
                      <div class="rooms-details-header fl-wrap">
                        <!-- <span class="rooms-price">$81 <strong> / person</strong></span> -->
                        <h3>{{$room->name}}</h3>
                        <h5>Allow Guests: <span>{{$room->permitted_occupants}}</span></h5>
                        <h5>Max Guests with Extra Charge: <span>{{$room->max_with_extra_charge}}</span></h5>
                      </div>
                       <!-- @if($room->description_en)
                      <p>{{Str::limit($room->description_en->description,180)}}</p>
                        @endif -->

                        <!-- pricing start -->
                        <?php
												// print_r(Booking::HotelDetail($hotel->hid)->child_age_to); die;
												if ($age !=null) {

												for ($i=0; $i < count($age); $i++) {
													if (Booking::HotelDetail($hotel->hid)->child_age_from <= $age[$i] && Booking::HotelDetail($hotel->hid)->child_age_to >= $age[$i]) {
													}else {
														$adult = $adult+1;
														$child = $child-1;
													}
												}
											}

												// print_r($adult); die;
												 ?>
												<!-- <p>{{Booking::getRoomsCalculation($room->rid,$from_date,$to_date,$adult,$child,$age)}}</p> -->
												@foreach(Booking::getRoomsCalculation($room->rid,$from_date,$to_date,$adult,$child,$age) as $price)
												<div class="calc-div">
													@if($price->quote !="")
												 	@if($adult == 1 && $child ==0)
													<h5> <span>{{$price->price}} USD  X {{$price->days}} Nights</span> </h5>
													<p>{{$adult}} Adult</p>

													@elseif($adult == 1 && $child ==1)
													<h5> <span>{{$price->price}} USD  X {{$price->days}} Nights</span> </h5>
													<p>{{$adult}} Adult + {{$child}} Child (Double Twin)</p>

													@elseif($adult == 1 && $child ==2)
													<h5> <span>{{$price->price}} USD @if($price->room == 2) + {{$price->price}} USD @else + {{$price->childprice}} USD (Child) @endif X {{$price->days}} Nights</span> </h5>
													@if($price->room == 2)
													<p>{{$price->room}} X Rooms= {{$adult}} Adult + {{$child}} Child (Double Twin)</p>
													@else
													<p>{{$adult}} Adult + 1 Child (Double Twin) + {{$child}} Child Extrabed</p>
													@endif

													@elseif($adult == 1 && $child ==3)
													<h5> <span>{{$price->price}} USD + {{$price->price}} USD  X {{$price->days}} Nights</span> </h5>
													<p>{{$price->room}} X Rooms= {{$adult}} Adult + {{$child}} Child (2 Double Twin)</p>
													<!-- 1 Adult Ends -->

													<!-- 2 Adult Start -->
													@elseif($adult == 2 && $child ==0)
													<h5> <span>{{$price->price}} USD  X {{$price->days}} Nights</span> </h5>
													<p>{{$adult}} Adults (Double Twin)</p>
													@elseif($adult == 2 && $child ==1)
													<h5> <span>{{$price->price}} USD @if($price->room == 2) + {{$price->price}} USD @else + {{$price->childprice}} USD (Child) @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 2)
													<p>{{$price->room}} X Rooms= {{$adult}} Adult + {{$child}} Child (Double Twin)</p>
													@else
													<p>{{$adult}} Adult  (Double Twin) + {{$child}} Child Extrabed</p>
													@endif
													@elseif($adult == 2 && $child ==2)
													<h5> <span>{{$price->price}} USD @if($price->room == 2) + {{$price->price}} USD @else + {{$price->childprice}} USD (Child) @endif X {{$price->days}} Nights</span> </h5>
													@if($price->room == 2)
													<p>{{$price->room}} X Rooms= {{$adult}} Adult + {{$child}} Child (Double Twin)</p>
													@else
													<p>{{$adult}} Adult + {{$child}} Child (Double Twin) + 1 Child Extrabed</p>
													@endif
													@elseif($adult == 2 && $child ==3)
													<h5> <span>{{$price->price}} USD + {{$price->price}} USD X {{$price->days}} Nights</span> </h5>
													<p>{{$price->room}} X Rooms= {{$adult}} Adult (Double Twin) + {{$child}} Child (Double Twin)</p>
													<!-- 2 Adult End -->

													<!-- 3 Adult Start -->
													@elseif($adult == 3 && $child ==0)
													<h5> <span>{{$price->price}} USD + {{$price->extra_price_ad}} USD (Adult) X {{$price->days}} Nights</span> </h5>
													@if($price->room == 2)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 1 Adult (Single) </p>
													@else
													<p>2 Adult (Double Twin) + 1 Adult Extrabed</p>
													@endif

													@elseif($adult == 3 && $child ==1)
													<h5> <span>{{$price->price}} USD @if($price->room == 2) + {{$price->price}} USD @else + {{$price->extra_price_ad}} USD (Adult) @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 2)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 1 Adult {{$child}} Child (Double Twin)</p>
													@else
													<p>2 Adult+ 1 Child  (Double Twin) + 1 Adult Extrabed</p>
													@endif

													@elseif($adult == 3 && $child ==2)
													<h5> <span>{{$price->price}} USD + {{$price->price}} USD  @if($price->room == 3) + {{$price->price}} USD @else + {{$price->childprice}}  USD (Adult) @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Child (Double Twin) + 1 Adult (Single)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + {{$child}} Child (Double Twin) + 1 Adult Extrabed</p>
													@endif

													@elseif($adult == 3 && $child ==3)
													<h5> <span> @if($price->room == 3) {{$price->price}} X 3 USD  @else  {{$price->price}} X 2 USD + {{$price->childprice}} USD (Child) + {{$price->extra_price_ad}} (Adult) @endif X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Child (Double Twin) + 1 Adult 1 Child (Double Twin)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) 1 Child Extrabed + 2 Child (Double Twin) 1 Adult Extrabed</p>
													@endif
													<!-- Adult 3 End -->


													<!-- Adult 4 Start -->
													@elseif($adult == 4 && $child ==0)
													<h5> <span>{{$price->price}} X 2 USD X {{$price->days}} Nights</span> </h5>
													<p>{{$price->room}} X Rooms 2 Adult (Double Twin) + 2 Adult (Double Twin) </p>

													@elseif($adult == 4 && $child ==1)
													<h5> <span>@if($price->room==3) {{$price->price}} X 3 USD @else {{$price->price}} X 2 USD + {{$price->childprice}} USD (Child) @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Adult (Double Twin) + 1 Child (Single)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Child  (Double Twin + Child Extrabed) + 2 Adult (Double Twin)</p>
													@endif

													@elseif($adult == 4 && $child ==2)
													<h5> <span>@if($price->room == 3) {{$price->price}} X 3 USD @else {{$price->price}} X 2 USD + {{$price->childprice}} X 2 USD @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Child (Double Twin) + 2 Adult (Double Twin)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Child  (Double Twin + Child Extrabed) + 2 Adult + 1 (Double Twin + Child Extrabed)</p>
													@endif

													@elseif($adult == 4 && $child ==3)
													<h5> <span> @if($price->room == 4) {{$price->price}} X 4 USD  @else  {{$price->price}} X 3 USD + {{$price->childprice}} USD (Child)  @endif X {{$price->days}} Nights</span> </h5>
													@if($price->room == 4)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 1 Adult 1 Child (Double Twin) + 2 Child (Double Twin) + 1 Adult (Single)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Child (Double Twin + Child Extrabed) + 2 Child (Double Twin) + 2 Adult (Double Twin)</p>
													@endif
													<!-- 4 Adult Ends -->


													<!-- Adult 5 -->
													@elseif($adult == 5 && $child ==0)
													<h5> <span>@if($price->room == 3) {{$price->price}} X 3 USD @else {{$price->price}} X 2 USD + {{$price->extra_price_ad}} @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Adult (Double Twin) + 1 Adult (Single)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Adult  (Double Twin + Adult Extrabed) + 2 Adult (Double Twin)</p>
													@endif

													@elseif($adult == 5 && $child ==1)
													<h5> <span>@if($price->room==3) {{$price->price}} X 3 USD @else {{$price->price}} X 2 USD + {{$price->childprice}} USD (Child) + {{$price->extra_price_ad}} USD (Adult) @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 3)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Adult (Double Twin) + 1 Child 1 Adult (Double Twin)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Child  (Double Twin + Child Extrabed) + 2 Adult + 1 Adult (Double Twin + Adult Extrabed)</p>
													@endif

													@elseif($adult == 5 && $child ==2)
													<h5> <span>@if($price->room == 4) {{$price->price}} X 4 USD @else {{$price->price}} X 3 USD + {{$price->childprice}} X 1 USD @endif  X {{$price->days}} Nights</span> </h5>
													@if($price->room == 4)
													<p>{{$price->room}} X Rooms= 2 Adult (Double Twin) + 2 Adult (Double Twin) + 2 Child (Double Twin) + 1 Adult (Single)</p>
													@else
													<p>{{$price->room}} X Rooms= 2 Adult + 1 Child  (Double Twin + Child Extrabed) + 2 Adult (Double Twin) + 1 Adult 1 Child (Double Twin)</p>
													@endif

													@elseif($adult == 5 && $child ==3)
													<h5> <span> @if($price->room == 4) {{$price->price}} X 4 USD  @else  {{$price->price}} X 3 USD + {{$price->childprice}} X 2 USD (Child)  @endif X {{$price->days}} Nights</span> </h5>
													@if($price->room == 4)
													<p>{{$price->room}} X Rooms 2 Adult (Double Twin) + 2 Adult (Double Twin) + 2 Child (Double Twin) + 1 Adult 1 Child (Double Twin)</p>
													@else
													<p>{{$price->room}} X Rooms 2 Adult + 1 Child (Double Twin + Child Extrabed) + 2 Adult + 1 Child (Double Twin + Child Extrabed) + 1 Adult 1 Child (Double Twin)</p>
													@endif
													<!-- 5 Adult Ends -->
													@endif


													@if($price->quote->is_abf_included == '1')
													<p><span class="text-muted">Breakfast Included</span> <span style="float:right;color: #46A5DC; font-size:20px;">{{$price->totalprice}} USD</span> </p>
													@else
													<p><span style="float:right;color: #46A5DC; font-size:20px;">{{$price->totalprice}} USD</span></p>
													@endif

													@else
													<p>Get Price on Call</p>
													@endif
												</div>
                        @endforeach
                        <!-- Pricing End -->

                      <div class="facilities-list fl-wrap">
                        <ul>
                          <!-- <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li> -->
                          <li><i class="fal fa-bath"></i><span>1 Bathroom</span></li>
                          <!-- <li><i class="fal fa-snowflake"></i><span>Air conditioner</span></li> -->
                          <!-- <li><i class="fal fa-tv"></i><span> Tv Inside</span></li> -->
                          <li><i class="fas fa-concierge-bell"></i><span>Breakfast</span></li>
                        </ul>
                        @if(count($parms)>1)
                        <a href="{{url('room-detail-ajax/'.$room->rid.'?'.$parms[1])}}" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>
                        @else
                        <a href="{{url('room-detail-ajax/'.$room->rid)}}" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>
                        @endif
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!--  rooms-item end -->
                </div>
                <!--   rooms-container end -->
              </div>
              <!-- list-single-main-item end -->
              <!-- list-single-main-item -->

              <!-- Review Section -->
              <!-- <div class="list-single-main-item fl-wrap" id="sec5">
                <div class="list-single-main-item-title fl-wrap">
                  <h3>Item Reviews -  <span> 2 </span></h3>
                </div>

                <div class="reviews-score-wrap fl-wrap">
                  <div class="review-score-total">
                    <span>
                      4.5
                      <strong>Very Good</strong>
                    </span>
                    <a href="#" class="color2-bg">Add Review</a>
                  </div>
                  <div class="review-score-detail">
                    <div class="review-score-detail-list">
                      <div class="rate-item fl-wrap">
                        <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                        <div class="rate-item-bg" data-percent="100%">
                          <div class="rate-item-line color-bg"></div>
                        </div>
                        <div class="rate-item-percent">5.0</div>
                      </div>
                      <div class="rate-item fl-wrap">
                        <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                        <div class="rate-item-bg" data-percent="90%">
                          <div class="rate-item-line color-bg"></div>
                        </div>
                        <div class="rate-item-percent">5.0</div>
                      </div>
                      <div class="rate-item fl-wrap">
                        <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                        <div class="rate-item-bg" data-percent="80%">
                          <div class="rate-item-line color-bg"></div>
                        </div>
                        <div class="rate-item-percent">4.0</div>
                      </div>
                      <div class="rate-item fl-wrap">
                        <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                        <div class="rate-item-bg" data-percent="90%">
                          <div class="rate-item-line color-bg"></div>
                        </div>
                        <div class="rate-item-percent">4.5</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reviews-comments-wrap">
                  <div class="reviews-comments-item">
                    <div class="review-comments-avatar">
                      <img src="images/avatar/2.jpg" alt="">
                    </div>
                    <div class="reviews-comments-item-text">
                      <h4><a href="#">Liza Rose</a></h4>
                      <div class="review-score-user">
                        <span>4.4</span>
                        <strong>Good</strong>
                      </div>
                      <div class="clearfix"></div>
                      <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                      <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                    </div>
                  </div>
                  <div class="reviews-comments-item">
                    <div class="review-comments-avatar">
                      <img src="http://easybook.kwst.net/images/avatar/5.jpg" alt="">
                    </div>
                    <div class="reviews-comments-item-text">
                      <h4><a href="#">Adam Koncy</a></h4>
                      <div class="review-score-user">
                        <span>4.7</span>
                        <strong>Very Good</strong>
                      </div>
                      <div class="clearfix"></div>
                      <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                      <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- Review Section End -->

              <!-- list-single-main-item end -->
              <!-- list-single-main-item -->
              <!-- ADD Review Section -->
              <!-- <div class="list-single-main-item fl-wrap" id="sec6">
                <div class="list-single-main-item-title fl-wrap">
                  <h3>Add Review</h3>
                </div>
                <div id="add-review" class="add-review-box">
                  <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                    <fieldset>
                      <div class="review-score-form fl-wrap">
                        <div class="review-range-container">
                          <div class="review-range-item">
                            <div class="range-slider-title">Cleanliness</div>
                            <div class="range-slider-wrap ">
                              <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                            </div>
                          </div>
                          <div class="review-range-item">
                            <div class="range-slider-title">Comfort</div>
                            <div class="range-slider-wrap ">
                              <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                            </div>
                          </div>
                          <div class="review-range-item">
                            <div class="range-slider-title">Staf</div>
                            <div class="range-slider-wrap ">
                              <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                            </div>
                          </div>
                          <div class="review-range-item">
                            <div class="range-slider-title">Facilities</div>
                            <div class="range-slider-wrap">
                              <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                            </div>
                          </div>
                        </div>
                        <div class="review-total">
                          <span><input type="text" name="rg_total"  data-form="AVG({rgcl})" value="0"></span>
                          <strong>Your Score</strong>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label><i class="fal fa-user"></i></label>
                          <input type="text" placeholder="Your Name *" value=""/>
                        </div>
                        <div class="col-md-6">
                          <label><i class="fal fa-envelope"></i>  </label>
                          <input type="text" placeholder="Email Address*" value=""/>
                        </div>
                      </div>
                      <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                    </fieldset>
                    <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit Review <i class="fal fa-paper-plane"></i></button>
                  </form>
                </div>
              </div> -->
              <!-- Add Review Section Ends -->
              <!-- list-single-main-item end -->
            </div>
          </div>
          <!--   datails end  -->
          <!--   sidebar  -->
          <div class="col-md-4">
            <!--box-widget-wrap -->
            <div class="box-widget-wrap">
              <!--box-widget-item -->
              <div class="box-widget-item fl-wrap">
                <div class="box-widget">
                  <div class="box-widget-content">
                    <div class="box-widget-item-header">
                      <h3> Book This Hotel</h3>
                    </div>
                    <form name="bookFormCalc" id="booking-form"  class="book-form custom-form">
                      {{csrf_field()}}
                      <fieldset>
                        <div class="cal-item">
                          <div class="bookdate-container  fl-wrap">
                            <label><i class="fal fa-calendar-check"></i> When </label>
                            <input type="text" id="date" class="required2"    placeholder="Date In-Out" name="bookdates"   value=""/>
                            <p class="asterisk"  style="display:none; color:#f9b90f; text-align:left;float: inherit;">* Date Required</p>
                            <div class="bookdate-container-dayscounter"><i class="far fa-question-circle"></i><span>Days : <strong>0</strong></span></div>
                          </div>
                        </div>
                        <div class="cal-item">
                          <div class="listsearch-input-item">
                            <label>Room Type</label>
                            <select data-placeholder="Room Type"  name="room_type" id="room_type"   class="chosen-select no-search-select" >
                            <option value="">Select Room</option>
                            @foreach($rooms as $roomdata)
                              <option value="{{$roomdata->rid}}">{{$roomdata->name}}</option>
                              @endforeach
                            </select>
                            <p class="asterisk asterisk-room"  style="display:none; color:#f9b90f; text-align:left;float: inherit;">* Select Room</p>
                            <!--data-formula -->
                            <!-- <input type="text" name="item_total" class="hid-input"  value=""  data-form="{repopt}"> -->
                          </div>
                        </div>
                        <div class="cal-item">
                          <div class="quantity-item fl-wrap">
                            <label style="float:initial;"> Rooms</label>
                            <div class="quantity">
                              <input type="number" name="room" id="room" min="1" max="10" step="1" value="1">
                              <!-- <input type="text" name="item_total" class="hid-input" value="0" data-form="{qty3} * {repopt} - {repopt}"> -->
                            </div>
                          </div>
                        </div>
                        <div class="cal-item">
                          <div class="quantity-item fl-wrap">
                            <label style="float:initial;"> Adults</label>
                            <div class="quantity">
                              <input type="number"  name="adult" id="adult" min="1" max="10" step="1" value="1">
                              <!-- <input type="text" name="item_total" class="hid-input" value="0" data-form="{qty3} * {repopt} - {repopt}"> -->
                            </div>
                          </div>
                          <div class="quantity-item fl-wrap fcit">
                            <label> Children</label>
                            <div class="quantity children-detail">
                              <input type="number"  name="child" id="child" min="0" max="3" step="1" value="0">
                              <!-- <select name="sale" class="hid-input">
                                <option value=".7"  selected>sale</option>
                              </select>
                              <input type="text" name="item_total" class="hid-input" value="0" data-form="({repopt} * {sale})*{qty2}"> -->
                            </div>
                          </div>
                          <div class="field_wrapper_detail" id="field_wrapper_detail">

                          </div>
                        </div>
                      </fieldset>
                      <!-- <input type="number"  id="totaldays" name="qty5" class="hid-input"> -->
                      <div class="total-coast fl-wrap"><strong>Total Cost</strong> <span>$ <input type="text" id="total_price" name="grand_total" value=""></span></div>
                      <button type="submit" class="btnaplly color2-bg" id="price_btn">Get Price<i class="fal fa-paper-plane"></i></button>
                      <button class="btnaplly color2-bg" id="book_btn" style="display:none;">Book Now<i class="fal fa-paper-plane"></i></button>
                    </form>
                  </div>
                </div>
              </div>
              <!--box-widget-item end -->
              <!--box-widget-item -->

              <!--box-widget-item end -->
              <!--box-widget-item -->
              <div class="box-widget-item fl-wrap">
                <div class="box-widget">
                  <div class="box-widget-content">
                    <div class="box-widget-item-header">
                      <h3> Contact Information</h3>
                    </div>
                    <div class="box-widget-list">

                      <ul>
                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">{{$hotel->address}}</a></li>
                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$hotel->phone_1}}</a><a href="#">{{$hotel->phone_2}}</a></li>
                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$hotel->email_primary}}</a></li>
                        <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">{{$hotel->web_address}}</a></li>
                      </ul>
                    </div>
                    <div class="list-widget-social">
                      <ul>
                        <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!--box-widget-item end -->
              <!--box-widget-item -->

              <!-- <div class="box-widget-item fl-wrap">
                <div id="weather-widget" class="gradient-bg ideaboxWeather" data-city="New York"></div>
              </div> -->

              <div class="box-widget-item fl-wrap">
                <div class="box-widget">
                  <div class="box-widget-content">
                    <div class="box-widget-item-header">
                      <h3>Similar Listings</h3>
                    </div>
                    <div class="widget-posts fl-wrap">
                      <ul>
                        @foreach($similar_list as $list)
                        <?php
                        $li_image = $list->photo_1;
                        $li_image = substr($li_image,37);
                        $base_path_mod = str_replace('\\', '/', $li_image);
                        $list_image ='http://tour2thailand.com/images/hotels'.$base_path_mod;
                        $hotel_image2=urldecode($hotel_image);
                        //print_r($hotel_image); die;
                         ?>
                        <li class="clearfix">
                          <a href="{{url('hotel-detail/'.$list->hid)}}"  class="widget-posts-img"><img src="{{url($list_image)}}" class="respimg" alt=""></a>
                          <div class="widget-posts-descr">
                            <a href="{{url('hotel-detail/'.$list->hid)}}" title="">{{$list->name}}</a>
                            @if($list->rate == '2*')
                               <div class="listing-rating card-popup-rainingvis" data-starrating2="2"></div>
                            @elseif($list->rate == '3*')
                               <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                            @elseif($list->rate == '4*')
                               <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                            @else
                               <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                            @endif
                            <!-- <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div> -->
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>{{$list->address}}</a></div>
                            <span class="rooms-price">${{$list->low_rate}} <strong> /  Awg</strong></span>
                          </div>
                        </li>
                        @endforeach
                      </ul>
                      <a class="widget-posts-link" href="{{url('/listing')}}">See All Listing <i class="fal fa-long-arrow-right"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--box-widget-item end -->
            </div>
            <!--box-widget-wrap end -->
          </div>
          <!--   sidebar end  -->
        </div>
        <!--   row end  -->
      </div>
      <!--   container  end  -->
    </section>
    <!--  section  end-->
  </div>
  <!-- content end-->
  <div class="limit-box fl-wrap"></div>
</div>
<!--wrapper end -->
@endsection
@section('script')
<script>
var x = 0;
$(document).ready(function(){
  var maxField = 3; //Input fields increment limitation
  var addButton = $('.children-detail .quantity-up'); //Add button selector
  var wrapper = $('.field_wrapper_detail'); //Input field wrapper
  $(addButton).click(function(){
    //Check maximum number of input fields
    if(x < maxField){
      x++; //Increment field counter
      // alert(x);

      var fieldHTML = '<div class="quantity-item age-items childd-'+x+'">'+
      '<div class="quantity">'+
      '<select name="age[]" id="age">'+
      '<option value="">0 years</option>'+
      '<option value="1">1 years</option>'+
      '<option value="2">2 years</option>'+
      '<option value="3">3 years</option>'+
      '<option value="4">4 years</option>'+
      '<option value="5">5 years</option>'+
      '<option value="6">6 years</option>'+
      '<option value="7">7 years</option>'+
      '<option value="8">8 years</option>'+
      '<option value="9">9 years</option>'+
      '<option value="10">10 years</option>'+
      '<option value="11">11 years</option>'+
      '<option value="12">12 years</option>'+
      '<option value="13">13 years</option>'+
      '<option value="14">14 years</option>'+
      '<option value="15">15 years</option>'+
      '</select>'+
      '</div>'+
      '</div>'; //New input field html

      $('#field_wrapper_detail').append(fieldHTML); //Add field html
    }

  });
  //Once remove button is clicked
  $(document).on('click', '.children-detail .quantity-down', function(e){
    e.preventDefault();
    // alert(x);
    $('.childd-'+x).remove();
    // $(this).parent('div').remove(); //Remove field html
    if (x>=0) {
      x--; //Decrement field counter
    }
  });
});

$('#room_type').on('change',function () {
  $('#room_type').removeClass("required2");
$( "#room_type" ).children().removeClass("required2");
});

// $("#price_btn").on('click', function (e) {
$("#booking-form").on('submit', function (e) {
  e.preventDefault();
  form = new FormData(this);
  var room_id = $("#room_type").val();
  // var date = $("#date").val();
  // var room = $("#room").val();
  // var adult = $("#adult").val();
  // var child = $("#child").val();
  // var age = $("#age").val();


  $(".asterisk").hide();
        var empty = $(".required2").filter(function() { return !this.value; })
                  .next(".asterisk").show();
                  if(empty.length != 0){
                  $("#empty_error").show();
            setTimeout(function () {
              $("#empty_error").hide();
            },5000);
          }
          // alert(empty.length);
      if(empty.length) return false;   //uh oh, one was empty!
      $('.right').stop().animate({scrollTop: 0}, { duration: 1500, easing: 'easeOutQuart'});

if (room_id =="") {
  $(".asterisk-room").show();
  return false;
}

  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "POST",
      url:" {{ url('/get-roomPrice')}}",
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        // console.log(data);
        // if (data == 1) {
        //   toastr.success('Information Updated Successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
        // }

        $('#total_price').html(data);

      },
      error: function() {
        alert("Error posting feed");
      }
    });
  //return false;
});
</script>
@endsection
