<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('style.css')}}"/>

    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}"/>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script
        src="http://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script>
        $(document).on("click", "#saveNewsletter", function (e) { // Ajax is asynchronous, the success or the error function will be called when the server answers the client
            e.preventDefault(); // Prevent Default form Submission

            $.ajax({
                type: "post",
                url: '/createNewsletter',
                data: $("#newsletterForm").serialize(),
                success: function (store) {
                    $('#saveNewsletter').prop('disabled', true);
                    var successmessage = '<div class="alert alert-success"> ' +
                        '<div class="row">' +
                        '<div class="col-auto align-self-start">' +
                        ' </div>' +
                        '<div class="col">' + '<p>' + '\ <span class="fas fa-check"></span>\ Thanks for subscribing to our newsletter!'
                        + '</p>'
                        + '</div>' + '</div>' + '</div>';
                    $("#newsletterResults").html(successmessage);
                },
                error: function (data) {
                    console.log(data);
                }
            });

        });
    </script>

    @yield('head')
</head>
<body>
<div id="wrapper">
    <div class="header"><!--Header -->
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-4 main-logo">
                    <a href="/"><img src="images/logo.png" alt="logo" class="logo img-responsive"/></a>
                </div>
                <div class="col-md-8">
                    <div class="pushright">
                        <div class="top">

                            @if (!Auth::check()) {{--    show login and register only for user --}}
                            <a id="reg" class="btn btn-default btn-dark">Login<span>-- Or --</span>Register</a>
                            <div class="regwrap">
                                <div class="row">
                                    <div class="col-md-6 regform">
                                        <div class="title-widget-bg">
                                            <div class="title-widget">Login</div>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" placeholder="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="current-password"
                                                       placeholder="password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
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
                                        <button class="btn btn-default btn-yellow"
                                                onclick="window.location='{{ url("register") }}'">Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @else
                                <a id="reg" class="btn btn-default btn-dark"
                                   href="{{ Auth::user()->role_id==1 ? '/admin' : '' }}"> <i class="fas fa-user fa-lg"
                                                                                             style="color: {{ Auth::user()->role_id===1 ? 'gold' : 'white' }}; padding-right: 15px"></i>{{Auth::user()->name}}
                                </a>
                                <a id="reg" class="btn btn-default btn-danger" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            @endif

                            <div class="srch-wrap">
                                <a href="/#" id="srch" class="btn btn-default btn-search"><i
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
                                <li><a href="/" id="headerHome" class="">Home</a></li>
                                <li class="dropdown">
                                    <a href="/#" class="dropdown-toggle" data-toggle="dropdown"
                                       id="headerCategories">Categories <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="/">Home Page</a></li>
                                        @yield('categories')
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}" id="headerAbout">About</a></li>
                                <li><a href="{{ route('contact') }}" id="headerContact" class="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 machart">
                        @if (Auth::check())
                            <button id="popcart" class="btn btn-default btn-chart btn-sm "><span
                                    class="mychart">Cart</span>|<span
                                    class="allprice">$0.00</span></button> @endif
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
                                    <td><a href="/"><i class="fa fa-times-circle fa-2x"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product.html"><img src="images/dummy-1.png" alt=""
                                                                    class="img-responsive"/></a>
                                    </td>
                                    <td><a href="product.html">Casio Exilim Zoom</a><br/><span>Color: green</span></td>
                                    <td>1X</td>
                                    <td>$138.80</td>
                                    <td><a href="/"><i class="fa fa-times-circle fa-2x"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product.html"><img src="images/dummy-1.png" alt=""
                                                                    class="img-responsive"/></a>
                                    </td>
                                    <td><a href="product.html">Casio Exilim Zoom</a><br/><span>Color: green</span></td>
                                    <td>1X</td>
                                    <td>$138.80</td>
                                    <td><a href="/"><i class="fa fa-times-circle fa-2x"></i></a></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="small-menu">
            @if (Auth::check())
                <li><a href="/" class="myacc">My Account</a></li>
                <li><a href="/" class="myshop">Shopping Chart</a></li>
                <li><a href="/" class="mycheck">Checkout</a></li>
            @endif
        </ul>
        <div class="clearfix"></div>
        <div class="lines"></div>

        @yield('insideMainContainer')
    </div>
    @yield('content')
    <div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">Follow Us</div>
					</div>
					<ul style="list-style: none;" class='fsoc'>
						<li>
                            <div>
                                <i class="fa fa-twitter fa-2x"></i>
                                <a href="#">Twitter</a>
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
                            </div>
						</li>
						<li>
                            <div>
                                <i class="fa fa-feed fa-2x"></i>
                                <a href="#">Feed</a>
                            </div>
						</li>
					</ul>
						<div class="clearfix"></div>
				</div>
				<div class="col-md-4">
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
				</div>
				<div class="col-md-4">
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
				</div>
            </div>
            <div class="f-credit">&copy;All rights reserved by <a href="index.html#">yoursite.com</a></div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{asset('js/jquery.ui.map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/demo.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/rate/jquery.raty.js')}}"></script>
    <script src="{{asset('js/labs.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/product/lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/product/jquery.fancybox.js@v=2.1.5')}}"></script>

    <!-- custom js -->
    <script src="{{asset('js/shop.js')}}"></script>
</div>
</body>
</html>

