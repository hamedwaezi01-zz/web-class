@extends('layouts.main_layout')

@section('title')About @stop
@section('head')
	<script> $(document).ready(function () {
			$("#headerAbout").addClass("active");
		});</script>
@stop

@section('categories')
@foreach ($cats as $cat)
<li style="white-space: nowrap;" ><a href="{{ route('category.one',[$cat['id']]) }}">{{ $cat['name'] }}</a></li>
@endforeach
@stop
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="page-sidebar.html#">Home</a> &rsaquo; About</div>
							<div class="bigtitle">About</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">About Shopping</div>
				</div>
				<div class="page-content">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry.
					</p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesettin industry.
					</p>
				</div>
			</div>
			<div class="col-md-3"><!--sidebar-->
				<div class="title-bg">
					<div class="title">Categories</div>
				</div>

				<div class="categorybox">
					<ul>
						<li><a href="category.html">Women Accessories</a></li>
						<li><a href="category.html">Men Shoes</a></li>
						<li><a href="category.html">Gift Specials</a></li>
						<li><a href="category.html">Electronics</a>
							<ul>
								<li><a href="page-sidebar.html#">iPhone 4S</a></li>
								<li><a href="page-sidebar.html#">Samsung Galaxy</a></li>
								<li><a href="page-sidebar.html#">MacBook Pro 17"</a></li>
							</ul>
						</li>
						<li><a href="category.html">On sale</a></li>
						<li><a href="category.html">Summer Specials</a></li>
						<li><a href="category.html">Electronics</a></li>
						<li class="lastone"><a href="category.html">Unique Stuff</a></li>
					</ul>
				</div>

				<div class="ads">
					<a href="product.html"><img src="images/ads.png" class="img-responsive" alt="" /></a>
				</div>

				<div class="title-bg">
					<div class="title">Best Seller</div>
				</div>
				<div class="best-seller">
					<ul>
						<li class="clearfix">
							<a href="page-sidebar.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="page-sidebar.html#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
						<li class="clearfix">
							<a href="page-sidebar.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="page-sidebar.html#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
						<li class="clearfix">
							<a href="page-sidebar.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="page-sidebar.html#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
					</ul>
				</div>

			</div><!--sidebar-->
		</div>
		<div class="spacer"></div>
	</div>
@stop
