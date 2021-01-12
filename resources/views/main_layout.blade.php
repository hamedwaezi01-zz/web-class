<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Theme</title>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    {{-- <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Main Style -->
	<link rel="stylesheet" href="{{asset('style.css')}}"/>

	<!-- owl Style -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}"/>


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="wrapper">
	<div class="header"><!--Header -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="index.html"><img src="images/logo.png" alt="logo" class="logo img-responsive"/></a>
				</div>
				<div class="col-md-8">
					<div class="pushright">
						<div class="top">
							<a href="index.html#" id="reg" class="btn btn-default btn-dark">Login<span>-- Or --</span>Register</a>
							<div class="regwrap">
								<div class="row">
									<div class="col-md-6 regform">
										<div class="title-widget-bg">
											<div class="title-widget">Login</div>
										</div>
										<form role="form">
											<div class="form-group">
												<input type="text" class="form-control" id="username"
													   placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="password"
													   placeholder="password">
											</div>
											<div class="form-group">
												<button class="btn btn-default btn-red btn-sm">Sign In</button>
											</div>
										</form>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Register</div>
										</div>
										<p>
											New User? By creating an account you be able to shop faster, be up to date
											on an order's status...
										</p>
										<button class="btn btn-default btn-yellow">Register Now</button>
									</div>
								</div>
							</div>
							<div class="srch-wrap">
								<a href="index.html#" id="srch" class="btn btn-default btn-search"><i
										class="fa fa-search"></i></a>
							</div>
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label for="search" class="col-sm-2 control-label">Search</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="search">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->
	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
									data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.html" class="active">Home</a>
									<div class="curve"></div>
								</li>
								<li class="dropdown menu-large">
									<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu</a>
									<ul class="dropdown-menu megamenu container row">
										<li class="col-sm-4">
											<h4>Page Template</h4>
											<ul>
												<li><a href="index.html">Home Page</a></li>
												<li><a href="category.html">Category Page</a></li>
												<li><a href="category-list.html">Category List Page</a></li>
												<li><a href="category-fullwidth.html">Category fullwidth</a></li>
												<li><a href="product.html">Detail Product Page</a></li>
												<li><a href="page-sidebar.html">Page with sidebar</a></li>
												<li><a href="register.html">Register Page</a></li>
												<li><a href="order.html">Order Page</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="cart.html">Cart Page</a></li>
												<li><a href="contact.html">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Page Template</h4>
											<ul>
												<li><a href="index.html">Home Page</a></li>
												<li><a href="category.html">Category Page</a></li>
												<li><a href="category-list.html">Category List Page</a></li>
												<li><a href="category-fullwidth.html">Category fullwidth</a></li>
												<li><a href="product.html">Detail Product Page</a></li>
												<li><a href="page-sidebar.html">Page with sidebar</a></li>
												<li><a href="register.html">Register Page</a></li>
												<li><a href="order.html">Order Page</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="cart.html">Cart Page</a></li>
												<li><a href="contact.html">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
										<li class="col-sm-4">
											<h4>Page Template</h4>
											<ul>
												<li><a href="index.html">Home Page</a></li>
												<li><a href="category.html">Category Page</a></li>
												<li><a href="category-list.html">Category List Page</a></li>
												<li><a href="category-fullwidth.html">Category fullwidth</a></li>
												<li><a href="product.html">Detail Product Page</a></li>
												<li><a href="page-sidebar.html">Page with sidebar</a></li>
												<li><a href="register.html">Register Page</a></li>
												<li><a href="order.html">Order Page</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="cart.html">Cart Page</a></li>
												<li><a href="contact.html">Contact Page</a></li>
											</ul>
											<div class="dashed-nav"></div>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b
											class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="index.html">Home Page</a></li>
										<li><a href="category.html">Category Page</a></li>
										<li><a href="category-list.html">Category List Page</a></li>
										<li><a href="category-fullwidth.html">Category fullwidth</a></li>
										<li><a href="product.html">Detail Product Page</a></li>
										<li><a href="page-sidebar.html">Page with sidebar</a></li>
										<li><a href="register.html">Register Page</a></li>
										<li><a href="order.html">Order Page</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="contact.html">Contact Page</a></li>
									</ul>
								</li>
								<li><a href="page-sidebar.html">About</a></li>
								<li><a href="category.html">Product</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					{{-- $todo: if not logged in do not show --}}
					{{-- <div class="col-md-2 machart">
						<button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Cart</span>|<span
								class="allprice">$0.00</span></button>
						<div class="popcart">
							<table class="table table-condensed popcart-inner">
								<tbody>
								<tr>
									<td>
										<a href="product.html"><img src="images/dummy-1.png" alt=""
																	class="img-responsive"/></a>
									</td>
									<td><a href="product.html">Casio Exilim Zoom</a><br/><span>Color: green</span></td>
									<td>1X</td>
									<td>$138.80</td>
									<td><a href="index.html"><i class="fa fa-times-circle fa-2x"></i></a></td>
								</tr>
								<tr>
									<td>
										<a href="product.html"><img src="images/dummy-1.png" alt=""
																	class="img-responsive"/></a>
									</td>
									<td><a href="product.html">Casio Exilim Zoom</a><br/><span>Color: green</span></td>
									<td>1X</td>
									<td>$138.80</td>
									<td><a href="index.html"><i class="fa fa-times-circle fa-2x"></i></a></td>
								</tr>
								<tr>
									<td>
										<a href="product.html"><img src="images/dummy-1.png" alt=""
																	class="img-responsive"/></a>
									</td>
									<td><a href="product.html">Casio Exilim Zoom</a><br/><span>Color: green</span></td>
									<td>1X</td>
									<td>$138.80</td>
									<td><a href="index.html"><i class="fa fa-times-circle fa-2x"></i></a></td>
								</tr>
								</tbody>
							</table>
							<span class="sub-tot">Sub-Total : <span>$277.60</span> | <span>Vat (17.5%)</span> : $36.00 </span>
							<br/>
							<div class="btn-popcart">
								<a href="checkout.html" class="btn btn-default btn-red btn-sm">Checkout</a>
								<a href="cart.html" class="btn btn-default btn-red btn-sm">More</a>
							</div>
							<div class="popcart-tot">
								<p>
									Total<br/>
									<span>$313.60</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
	<!--end main-nav -->



    <div class="content-block">
        @yield('content')
    </div>

	<div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">Follow Us</div>
					</div>
					{{-- <ul class="tweets">
						<li>Check out this great #themeforest item for you
							'Simpler Landing' <a href="index.html#">http://t.co/LbLwldb6 </a>
							<span>2 hours ago</span></li>
						<li class="lastone">Check out this great #themeforest item for you
							'Simpler Landing' <a href="index.html#">http://t.co/LbLwldb6 </a>
							<span>2 hours ago</span></li>
					</ul> --}}
					<ul style="list-style: none;" class='fsoc'>
						<li>
                            <div>
                                <i class="fa fa-twitter fa-2x"></i>
                                <a href="#">Twitter</a>
                                {{-- <a style="display: block" href="http://twitter.com/minimalthemes" class="ftwitter">twitter</a> --}}
                            </div>
						</li>
						<li>
                            <div>
                                <i class="fa fa-facebook fa-2x"></i>
                                <a href="#">Facebook</a>
                            </div>
						</li>
						<li>
                            <div>
                                <i class="fa fa-flickr fa-2x"></i>
                                <a href="#">Flickr</a>
                                {{-- <a href="index.html#" class="fflickr">flickr</a> --}}
                            </div>
						</li>
						<li>
                            <div>
                                <i class="fa fa-feed fa-2x"></i>
                                <a href="#">Feed</a>
                                {{-- <a href="index.html#" class="ffeed">feed</a> --}}
                            </div>
						</li>
					</ul>
						<div class="clearfix"></div>

					{{-- <div style="float: left;" class="fsoc"> --}}
					{{-- </div> --}}
					{{-- <div class="clearfix"></div> --}}
					{{-- <a href="index.html#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i>
						<div>Follow us on twitter</div>
					</a> --}}
				</div><!--footer twitter widget-->
				<div class="col-md-4"><!--footer newsletter widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">Newsletter Signup</div>
					</div>
					<div class="newsletter">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua.
						</p>
						<form role="form">
							<div class="form-group">
								<label>Your Email address</label>
								<input type="email" class="form-control newstler-input" id="exampleInputEmail1"
									   placeholder="Enter email">
								<button class="btn btn-default btn-red btn-sm">Sign Up</button>
							</div>
						</form>
                    </div>
				</div><!--footer newsletter widget-->
				<div class="col-md-4"><!--footer contact widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">Shopping</div>
					</div>
					<ul class="contact-widget">
						<li>
                            <i class="fa fa-mobile fa-2x"></i>
                            <div>
                                +387 123 456, +387 123 456 <br/> +387 123 456
                            </div>
                        </li>
						<li>
                            <i class="fa fa-phone fa-2x"></i>
                            <div>
                                +387-123-456-1<br/>+387-123-456-2
                            </div>
                        </li>
						<li>
                            <i class="fa fa-envelope fa-2x"></i>
                            <div>
                                your@email.com<br/>customer.care@mail.com
                            </div>
                        </li>
					</ul>
				</div><!--footer contact widget-->
            </div>
            <div class="f-credit">&copy;All rights reserved by <a href="index.html#">yoursite.com</a></div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	{{-- <div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<ul class="footermenu"><!--footer nav-->
						<li><a href="index.html">Home</a></li>
						<li><a href="cart.html">My Cart</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="order.html">Completed Orders</a></li>
						<li><a href="contact.html">Contact us</a></li>
					</ul><!--footer nav-->

					<a href="index.html">
						<div class="payment visa"></div>
					</a>
					<a href="index.html">
						<div class="payment paypal"></div>
					</a>
					<a href="index.html">
						<div class="payment mc"></div>
					</a>
					<a href="index.html">
						<div class="payment nh"></div>
					</a>
				</div>
				<div class="col-md-3"><!--footer Share-->
					<div class="followon">Follow us on</div>

					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer--> --}}


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- map -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{asset('js/jquery.ui.map.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>

	<!-- owl carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>

	<!-- rating -->
	<script src="{{asset('js/rate/jquery.raty.js')}}"></script>
	<script src="{{asset('js/labs.js')}}" type="text/javascript"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="{{asset('js/product/lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>

	<!-- fancybox -->
	<script type="text/javascript" src="{{asset('js/product/jquery.fancybox.js@v=2.1.5')}}"></script>

	<!-- custom js -->
	<script src="{{asset('js/shop.js')}}"></script>
</div>
</body>
</html>

