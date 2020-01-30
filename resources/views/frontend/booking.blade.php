@extends('frontend.layouts.master')
@section('content')
<!--  wrapper  -->
<div id="wrapper">
	<!-- content-->
	<div class="content">
		<div class="breadcrumbs-fs fl-wrap">
			<div class="container">
				<div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Booking Page</span></div>
			</div>
		</div>
		<section class="middle-padding gre y-blue-bg">
			<div class="container">
				<div class="list-main-wrap-title single-main-wrap-title fl-wrap">
					<h2>Booking form for : <span>Park Central</span></h2>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="bookiing-form-wrap">
							<ul id="progressbar">
								<li class="active"><span>01.</span>Personal Info</li>
								<li><span>02.</span>Billing Address</li>
								<li><span>03.</span>Payment Method</li>
								<li><span>04.</span>Confirm</li>
							</ul>
							<!--   list-single-main-item -->
							<div class="list-single-main-item fl-wrap hidden-section tr-sec">
								<div class="profile-edit-container">
									<div class="custom-form">
										<form>
											<fieldset class="fl-wrap book_mdf">
												<div class="list-single-main-item-title fl-wrap">
													<h3>Your personal Information</h3>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<label>First Name <i class="far fa-user"></i></label>
														<input type="text" name="first_name" id="first_name" placeholder="Your Name" value=""/>
													</div>
													<div class="col-sm-6">
														<label>Last Name <i class="far fa-user"></i></label>
														<input type="text" name="last_name" id="last_name" placeholder="Your Last Name" value=""/>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<label>Email Address<i class="far fa-envelope"></i>  </label>
														<input type="text" id="email" name="email" placeholder="yourmail@domain.com" value=""/>
													</div>
													<div class="col-sm-6">
														<label>Phone<i class="far fa-phone"></i>  </label>
														<input type="text" name="phone" id="phone" placeholder="87945612233" value=""/>
													</div>
												</div>
												<div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>
												<div class="log-separator fl-wrap"><span>or</span></div>
												<!-- <div class="soc-log fl-wrap">
													<p>For faster login or register use your social account.</p>
													<a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
												</div> -->
												<div class="filter-tags">
													<input id="check-a" type="checkbox" name="check">
													<label for="check-a">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
												</div>
												<span class="fw-separator"></span>
												@if(Session::has('hbUser'))
												<a  href="#"  class="next-form action-button btn no-shdow-btn color-bg">Billing Address <i class="fal fa-angle-right"></i></a>
												@else
												<a  href="#" id="billing_button"  class="action-button btn no-shdow-btn color-bg" style="float:right;">Billing Address <i class="fal fa-angle-right"></i></a>
												@endif
											</fieldset>
											<fieldset class="fl-wrap book_mdf">
												<div class="list-single-main-item-title fl-wrap">
													<h3>Billing Address</h3>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<label>City <i class="fal fa-globe-asia"></i></label>
														<input type="text" name="city" id="city" placeholder="Your city" value=""/>
													</div>
													<div class="col-sm-6">
														<label>Country </label>
														<div class="listsearch-input-item ">
															<select data-placeholder="Your Country" name="country" id="country" class="chosen-select no-search-select" >
																<option>United states</option>
																<option>Asia</option>
																<option>Australia</option>
																<option>Europe</option>
																<option>South America</option>
																<option>Africa</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<label>Street <i class="fal fa-road"></i> </label>
														<input type="text" name="address" id="address" placeholder="Your Street" value=""/>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-8">
														<label>State<i class="fal fa-street-view"></i></label>
														<input type="text" name="state" id="state" placeholder="Your State" value=""/>
													</div>
													<div class="col-sm-4">
														<label>Postal code<i class="fal fa-barcode"></i> </label>
														<input type="text" name="post_code" id="post_code" placeholder="123456" value=""/>
													</div>
												</div>
												<div class="list-single-main-item-title fl-wrap">
													<h3>Addtional Notes</h3>
												</div>
												<textarea cols="40" name="detail" id="detail" rows="3" placeholder="Notes"></textarea>
												<span class="fw-separator"></span>
												<a  href="#"  class="previous-form action-button back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
												<a  href="#" id="payment_button"  class="next-form back-form action-button btn no-shdow-btn color-bg">Payment Step <i class="fal fa-angle-right"></i></a>

											</fieldset>
											<fieldset class="fl-wrap book_mdf">
												<div class="list-single-main-item-title fl-wrap">
													<h3>Payment method</h3>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<label>Cardholder's Name<i class="far fa-user"></i></label>
														<input type="text" placeholder="" value="Adam Kowalsky"/>
													</div>
													<div class="col-sm-6">
														<label>Card Number <i class="fal fa-credit-card-front"></i></label>
														<input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-3">
														<label>Expiry Month<i class="fal fa-calendar"></i></label>
														<input type="text" placeholder="MM" value=""/>
													</div>
													<div class="col-sm-3">
														<label>Expiry Year<i class="fal fa-calendar"></i></label>
														<input type="text" placeholder="YY" value=""/>
													</div>
													<div class="col-sm-2">
														<label>CVV / CVC *<i class="fal fa-credit-card"></i></label>
														<input type="password" placeholder="***" value=""/>
													</div>
													<div class="col-sm-4">
														<p style="padding-top:20px;">*Three digits number on the back of your card</p>
													</div>
												</div>
												<div class="log-separator fl-wrap"><span>or</span></div>
												<div class="soc-log fl-wrap">
													<p>Select Other Payment Method</p>
													<a href="#" class="paypal-log"><i class="fab fa-paypal"></i>Pay With Paypal</a>
												</div>
												<span class="fw-separator"></span>
												<a  href="#"  class="previous-form  back-form action-button    color-bg"><i class="fal fa-angle-left"></i> Back</a>
												<a  href="#"  class="next-form  action-button btn color2-bg no-shdow-btn">Confirm and Pay<i class="fal fa-angle-right"></i></a>
											</fieldset>
											<fieldset class="fl-wrap book_mdf">
												<div class="list-single-main-item-title fl-wrap">
													<h3>Confirmation</h3>
												</div>
												<div class="success-table-container">
													<div class="success-table-header fl-wrap">
														<i class="fal fa-check-circle decsth"></i>
														<h4>Thank you. Your reservation has been received.</h4>
														<div class="clearfix"></div>
														<p>Your payment has been processed successfully.</p>
														<a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>
													</div>
												</div>
												<span class="fw-separator"></span>
												<a  href="#"  class="previous-form action-button  back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<!--   list-single-main-item end -->
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-widget-item-header">
							<h3> Your  cart</h3>
						</div>
						<!--cart-details  -->
						<div class="cart-details fl-wrap">
							<!--cart-details_header-->
							<div class="cart-details_header">
								<a href="#"  class="widget-posts-img"><img src="http://easybook.kwst.net/images/gal/3.jpg" class="respimg" alt=""></a>
								<div class="widget-posts-descr">
									<a href="#" title="">Park Central</a>
									<div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
									<div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
								</div>
							</div>
							<!--cart-details_header end-->
							<!--ccart-details_text-->
							<div class="cart-details_text">
								<ul class="cart_list">
									<li>Room Type <span>Standard Family Room <strong>$81</strong></span></li>
									<li>From <span>02-11-18</span></li>
									<li>To <span>04-11-18</span></li>
									<li>Days<span>3 </span></li>
									<li>Adults <span>2</span></li>
									<li>Childs <span>1 <strong>-10%</strong></span></li>
									<li>Taxes And Fees <span><strong>$12</strong></span></li>
								</ul>
							</div>
							<!--cart-details_text end -->
						</div>
						<!--cart-details end -->
						<!--cart-total -->
						<div class="cart-total">
							<span class="cart-total_item_title">Total Cost</span>
							<strong>$690</strong>
						</div>
						<!--cart-total end -->
					</div>
				</div>
			</div>
		</section>
		<!-- section end -->
	</div>
	<!-- content end-->
</div>
<!--wrapper end -->
@endsection
@section('script')
<script>
// Registeration through ajax
var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;
$("#billing_button").on('click', function (e) {
	e.preventDefault();
	if (animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();

	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	$.ajax({
		type: "POST",
		url:" {{ url('/check-email')}}",
		data: {first_name:first_name,last_name:last_name,email:email,phone:phone},

		success: function(data){
			if (data == 1) {
				toastr.warning('Already Email Exist Please login!', '', {timeOut: 5000, positionClass: "toast-top-right"});
			}else if (data == "new") {
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
				next_fs.show();
				current_fs.animate({
						opacity: 0
				}, {
						step: function (now, mx) {
								scale = 1 - (1 - now) * 0.2;
								left = (now * 50) + "%";
								opacity = 1 - now;
								current_fs.css({
										'transform': 'scale(' + scale + ')',
										'position': 'absolute'
								});
								next_fs.css({
										'left': left,
										'opacity': opacity,
										'position': 'relative'
								});
						},
						duration: 1200,
						complete: function () {
								current_fs.hide();
								animating = false;
						},
						easing: 'easeInOutBack'
				});
			}

		},
		error: function() {
			alert("Error posting feed");
		}
	});
	//return false;
});
$("#payment_button").on('click', function (e) {
	e.preventDefault();
	var city = $('#city').val();
	var country = $('#country').val();
	var address = $('#address').val();
	var state = $('#state').val();
	var post_code = $('#post_code').val();
	var detail = $('#detail').val();

	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	$.ajax({
		type: "POST",
		url:" {{ url('/update-detail')}}",
		data: {city:city,country:country,address:address,state:state,post_code:post_code,detail:detail},

		success: function(data){
			if (data == 1) {
				toastr.success('Information updated successfully', '', {timeOut: 5000, positionClass: "toast-top-right"});
			}

		},
		error: function() {
			alert("Error posting feed");
		}
	});
	//return false;
});
</script>
@endsection
