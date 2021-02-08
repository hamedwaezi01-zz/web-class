@extends('layouts.main_layout')

@section('title')Home @stop

@section('head')
	<script> $(document).ready(function () {
			$("#headerHome").addClass("active");
		});</script>
@stop
@section('insideMainContainer')

	<div class="main-slide">
		<div id="sync1" class="owl-carousel">

			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Stylish Jacket, be your best deal</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec
							dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								<span class="oldprice">$314</span>
								<span>$199</span>
								<span class="ondeal">Best Deal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="images/slide-2.jpg" alt="" class="img-responsive"/>
				</div>
			</div>
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Nike Airmax</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec
							dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								<span class="oldprice">$314</span>
								<span>$199</span>
								<span class="ondeal">Best Deal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="images/slide-3.jpg" alt="" class="img-responsive"/>
				</div>
			</div>
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Unique smaragd ring</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec
							dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								<span class="oldprice">$314</span>
								<span>$199</span>
								<span class="ondeal">Best Deal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="images/slide-4.jpg" alt="" class="img-responsive"/>
				</div>
			</div>
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Stylish Jacket, be your best deal</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec
							dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								<span class="oldprice">$314</span>
								<span>$199</span>
								<span class="ondeal">Best Deal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="images/slide-2.jpg" alt="" class="img-responsive"/>
				</div>
			</div>
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Nike Airmax</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec
							dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								<span class="oldprice">$314</span>
								<span>$199</span>
								<span class="ondeal">Best Deal</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="images/slide-3.jpg" alt="" class="img-responsive"/>
				</div>
			</div>

		</div>
	</div>
	<div class="bar"></div>
	<div id="sync2" class="owl-carousel">
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Stylish Jacket</h3>
				<p>Description here here here</p>
			</div>
		</div>
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Stylish Jacket</h3>
				<p>Description here here here</p>
			</div>
		</div>
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Nike Airmax</h3>
				<p>Description here here here</p>
			</div>
		</div>
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Unique smaragd ring</h3>
				<p>Description here here here</p>
			</div>
		</div>
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Stylish Jacket</h3>
				<p>Description here here here</p>
			</div>
		</div>
		<div class="item">
			<div class="slide-type-1-sync">
				<h3>Nike Airmax</h3>
				<p>Description here here here</p>
			</div>
		</div>
	</div>
@stop

@section('categories')
@foreach ($cats as $cat)
<li style="white-space: nowrap;" ><a href="{{ route('category.one',[$cat['id']]) }}">{{ $cat['name'] }}</a></li>
@endforeach
@stop

@section('content')

	<div class="f-widget featpro">
		<div class="container">
			<div class="title-widget-bg">
				<div class="title-widget">Featured Products</div>
				<div class="carousel-nav">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
			</div>

			 <div id="product-carousel" class="owl-carousel owl-theme">
				@foreach ($featured as $f)
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="{{route('item.one',['gid'=>$f->groups['id'], 'id'=>$f['id']])}}"><img src="{{Voyager::image($f['image'])}}" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner">
									<span class="oldprice">${{$f['price']}}</span>
									<span>${{$f['price'] - $f['discount']}}</span>
								</div>
							</div>
						</div>
						<span class="smalltitle"><a href="{{route('item.one',['gid'=>$f->groups['id'], 'id'=>$f['id']])}}">{{$f['name']}}</a></span>
						<span class="smalldesc">Item No.  {{$f['id']}}</span>
					</div>
				</div>
			   @endforeach
			{{--    <div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="product.html"><img src="images/sample-1.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="product.html"><img src="images/sample-2.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag on-sale">
								<div class="inner on-sale"><span class="onsale"><span
											class="oldprice">$314</span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Black Shoes</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.html"><img src="images/sample-3.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Red T-Shirt</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.html"><img src="images/sample-1.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.html"><img src="images/sample-2.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Black Shoes</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.html"><img src="images/sample-3.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Red T-Shirt</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.html"><img src="images/sample-1.jpg" alt="" class="img-responsive"/></a>
							<div class="pricetag blue">
								<div class="inner"><span>$199</span></div>
							</div>
						</div>
						<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
						<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div> --}}
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">About Shopping</div>
				</div>
				<p class="ct">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p class="ct">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
					culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="index.html" class="btn btn-default btn-red btn-sm">Read More</a>

				<div class="title-bg">
					<div class="title">Newest Products</div>
				</div>
				<div class="row prdct"><!--Products-->
					@foreach ($latest as $l)
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="{{route('item.one', ['gid'=>$l->groups['id'], 'id'=> $l['id']])}}"><img src="{{Voyager::image($l['image'])}}" alt=""
									class="img-responsive"/></a>

									@if($l['discount']>0)
									<div class="pricetag on-sale">
									<div class="inner on-sale">
										<span class="onsale"><span class="oldprice">${{$l['price']}}
										</span>${{$l['price'] - $l['discount']}}</span>
									</div>
									@else
									<div class="pricetag">
										<div class="inner">${{$l['price']}}</div>
									@endif
								</div>
							</div>
							<span class="smalltitle"><a href="{{route('item.one', ['gid'=>$l->groups['id'], 'id'=> $l['id']])}}">{{$l['name']}}</a></span>
							<span class="smalldesc">Item no.  {{$l['id']}}</span>
						</div>
					</div>
					@endforeach
				   {{--
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-2.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag on-sale">
									<div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span>
									</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-1.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag">
									<div class="inner">$199</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-3.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag">
									<div class="inner">$199</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Red T- Shirt</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-1.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag">
									<div class="inner">$199</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-2.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag">
									<div class="inner">$199</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a href="product.html"><img src="images/sample-3.jpg" alt=""
															class="img-responsive"/></a>
								<div class="pricetag">
									<div class="inner">$199</div>
								</div>
							</div>
							<span class="smalltitle"><a href="product.html">Red T-Shirt</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div> --}}
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
			<div class="col-md-3"><!--sidebar-->
				@if (count($cats) > 0)

				<div class="title-bg">
					<div class="title">Categories</div>
				</div>

				<div class="categorybox">
					<ul>
						@foreach ($cats as $cat)

							<li><a href="{{ route('category.one',[$cat['id']]) }}">{{ $cat['name'] }}</a></li>
						@endforeach

					</ul>
				</div>

				<div class="ads">
					<a href="product.html"><img src="images/ads.png" class="img-responsive" alt=""/></a>
				</div>
				@endif
			</div><!--sidebar-->

		</div>
	</div>
@stop
