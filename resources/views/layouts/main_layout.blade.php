<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='font-awesome/css/font-awesome.css' rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"
          type="text/css">
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
    <script
        src="http://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script>
        /*  */
        $(document).on("click", "#saveNewsletter", function (e) { // Ajax is asynchronous, the success or the error function will be called when the server answers the client
            //#save is the submit input, #myform is the id of the form,
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
                                <li><a href="/" id="headerHome" class="">Home</a>

                                </li>
                                {{--                                <li class="dropdown menu-large">--}}
                                {{--                                    <ul class="dropdown-menu megamenu container row">--}}
                                {{--                                        <li class="col-sm-4">--}}
                                {{--                                            <h4>Page Template</h4>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/">Home Page</a></li>--}}
                                {{--                                                <li><a href="category.html">Category Page</a></li>--}}
                                {{--                                                <li><a href="category-list.html">Category List Page</a></li>--}}
                                {{--                                                <li><a href="category-fullwidth.html">Category fullwidth</a></li>--}}
                                {{--                                                <li><a href="product.html">Detail Product Page</a></li>--}}
                                {{--                                                <li><a href="page-sidebar.html">Page with sidebar</a></li>--}}
                                {{--                                                <li><a href="register.html">Register Page</a></li>--}}
                                {{--                                                <li><a href="order.html">Order Page</a></li>--}}
                                {{--                                                <li><a href="checkout.html">Checkout Page</a></li>--}}
                                {{--                                                <li><a href="cart.html">Cart Page</a></li>--}}
                                {{--                                                <li><a href="/contact">Contact Page</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                            <div class="dashed-nav"></div>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="col-sm-4">--}}
                                {{--                                            <h4>Page Template</h4>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/">Home Page</a></li>--}}
                                {{--                                                <li><a href="category.html">Category Page</a></li>--}}
                                {{--                                                <li><a href="category-list.html">Category List Page</a></li>--}}
                                {{--                                                <li><a href="category-fullwidth.html">Category fullwidth</a></li>--}}
                                {{--                                                <li><a href="product.html">Detail Product Page</a></li>--}}
                                {{--                                                <li><a href="page-sidebar.html">Page with sidebar</a></li>--}}
                                {{--                                                <li><a href="register.html">Register Page</a></li>--}}
                                {{--                                                <li><a href="order.html">Order Page</a></li>--}}
                                {{--                                                <li><a href="checkout.html">Checkout Page</a></li>--}}
                                {{--                                                <li><a href="cart.html">Cart Page</a></li>--}}
                                {{--                                                <li><a href="contact">Contact Page</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                            <div class="dashed-nav"></div>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="col-sm-4">--}}
                                {{--                                            <h4>Page Template</h4>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/">Home Page</a></li>--}}
                                {{--                                                <li><a href="category.html">Category Page</a></li>--}}
                                {{--                                                <li><a href="category-list.html">Category List Page</a></li>--}}
                                {{--                                                <li><a href="category-fullwidth.html">Category fullwidth</a></li>--}}
                                {{--                                                <li><a href="product.html">Detail Product Page</a></li>--}}
                                {{--                                                <li><a href="page-sidebar.html">Page with sidebar</a></li>--}}
                                {{--                                                <li><a href="register.html">Register Page</a></li>--}}
                                {{--                                                <li><a href="order.html">Order Page</a></li>--}}
                                {{--                                                <li><a href="checkout.html">Checkout Page</a></li>--}}
                                {{--                                                <li><a href="cart.html">Cart Page</a></li>--}}
                                {{--                                                <li><a href="contact">Contact Page</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                            <div class="dashed-nav"></div>--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}

                                <li class="dropdown">
                                    <a href="/#" class="dropdown-toggle" data-toggle="dropdown"
                                       id="headerCategories">Categories <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="/">Home Page</a></li>
                                        @yield('categories')
                                    </ul>
                                </li>
                                <li><a href="page-sidebar.html" id="headerAbout">About</a></li>
                                <li><a href="category.html" id="headerProduct">Product</a></li>
                                <li><a href="contact" id="headerContact" class="">Contact</a></li>
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
    </div><!--end main-nav -->

    <div class="container">
        <ul class="small-menu"><!--small-nav -->
            @if (Auth::check())
                <li><a href="/" class="myacc">My Account</a></li>
                <li><a href="/" class="myshop">Shopping Chart</a></li>
                <li><a href="/" class="mycheck">Checkout</a></li>
            @endif
        </ul><!--small-nav -->
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
                        <div class="title-widget">Twitter Updates</div>
                    </div>
                    <ul class="tweets">
                        <li>Check out this great #themeforest item for you
                            'Simpler Landing' <a href="/#">http://t.co/LbLwldb6 </a>
                            <span>2 hours ago</span></li>
                        <li class="lastone">Check out this great #themeforest item for you
                            'Simpler Landing' <a href="/#">http://t.co/LbLwldb6 </a>
                            <span>2 hours ago</span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="/#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i>
                        <div>Follow us on twitter</div>
                    </a>
                </div><!--footer twitter widget-->
                <div class="col-md-4"><!--footer newsletter widget-->
                    <div class="title-widget-bg">
                        <div class="title-widget">Newsletter Signup</div>
                    </div>
                    <div class="newsletter">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <form method="POST" action="" id="newsletterForm">
                            @csrf
                            <div class="form-group">
                                <label>Your Email address</label>
                                <input type="email" class="form-control newstler-input" id="exampleInputEmail1"
                                       placeholder="Enter email" name="email">
                                <button class="btn btn-default btn-red btn-sm" id="saveNewsletter">Sign Up</button>
                            </div>
                        </form>
                        <div id="newsletterResults">
                            <!-- All data will display here  -->
                        </div>
                    </div>
                </div><!--footer newsletter widget-->
                <div class="col-md-4"><!--footer contact widget-->
                    <div class="title-widget-bg">
                        <div class="title-widget-cursive">Shopping</div>
                    </div>
                    <ul class="contact-widget">
                        <li class="fphone">+387 123 456, +387 123 456 <br/> +387 123 456</li>
                        <li class="fmobile">+387-123-456-1<br/>+387-123-456-2</li>
                        <li class="fmail lastone">your@email.com<br/>customer.care@mail.com</li>
                    </ul>
                </div><!--footer contact widget-->
            </div>
            <div class="spacer"></div>
        </div>
    </div><!--footer Widget-->
    <div class="footer"><!--footer-->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="footermenu"><!--footer nav-->
                        <li><a href="/">Home</a></li>
                        <li><a href="cart.html">My Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order.html">Completed Orders</a></li>
                        <li><a href="contact">Contact us</a></li>
                    </ul><!--footer nav-->
                    <div class="f-credit">&copy;All rights reserved by <a href="/#">yoursite.com</a></div>
                    <a href="/">
                        <div class="payment visa"></div>
                    </a>
                    <a href="/">
                        <div class="payment paypal"></div>
                    </a>
                    <a href="/">
                        <div class="payment mc"></div>
                    </a>
                    <a href="/">
                        <div class="payment nh"></div>
                    </a>
                </div>
                <div class="col-md-3"><!--footer Share-->
                    <div class="followon">Follow us on</div>
                    <div class="fsoc">
                        <a href="http://twitter.com/minimalthemes" class="ftwitter">twitter</a>
                        <a href="http://www.facebook.com/pages/Minimal-Themes/264056723661265" class="ffacebook">facebook</a>
                        <a href="/#" class="fflickr">flickr</a>
                        <a href="/#" class="ffeed">feed</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><!--footer Share-->
            </div>
        </div>
    </div><!--footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
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

