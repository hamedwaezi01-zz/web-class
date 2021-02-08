@extends('layouts.main_layout')

@section('title')Category @stop
@section('head')
	<script> $(document).ready(function () {
			$("#headerCategories").addClass("active");
		});</script>
@stop

@section('categories')
@foreach ($cats as $cat)
<li style="white-space: nowrap;" ><a href="{{ route('category.one',[$cat['id']]) }}">{{ $cat['name'] }}</a></li>
@endforeach
@stop

{{-- @section('insideMainContainer')

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
					<img src="images/slide-1.jpg" alt="" class="img-responsive"/>
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
@stop --}}

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="category.html#">Home</a> &rsaquo; {{$group['name']}}</div>
							<div class="bigtitle">Category</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<button class="btn btn-default btn-red btn-lg">Purchase Theme</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">{{ $group['name'] }} - All products</div>
					<div class="title-nav">
						<a href="category.html"><i class="fa fa-th-large"></i>grid</a>
						<a href="category-list.html"><i class="fa fa-bars"></i>List</a>
					</div>
				</div>
				@if (count($items) > 0)
					<div class="row prdct">
						@foreach ($items as $item)
							<div class="col-md-4">
								<div class="productwrap">
									<div class="pr-img">
                                        {{-- <div class="hot"></div> --}}
                                        <div style="overflow:hidden">
                                            <a href="{{ route('item.one',['gid'=>$item['group_id'], 'id'=>$item['id']])  }}">
                                                <img
                                                style="min-width:100%; min-height:100%"
                                                src="{{ Voyager::image($item['image']) }}" alt="" class="img-responsive"/>
                                            </a>
                                        </div>
										<div class="pricetag">
                                            @if ($item['discount'] > 0)
											<div class="inner on-sale">
                                                <span class="onsale">
                                                    <span class="oldprice">${{ $item['price'] }}</span>${{ $item['discount'] }}
                                                </span>
											</div>
                                            @else
                                            <div class="inner">${{ $item['price']}}</div>
                                            @endif
										</div>
                                    </div>
                                    <span class="smalltitle">
                                        <a href="{{ route('category.one',[$item['id']]) }}">{{$item['name']}}</a>
                                    </span>
                                    <span class="smalldesc">Item no.: 1000</span>
								</div>
							</div>
						@endforeach
					</div>
				@endif

				<ul class="pagination shop-pag"><!--pagination-->
					<li><a href="category.html#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="category.html#">1</a></li>
					<li><a href="category.html#">2</a></li>
					<li><a href="category.html#">3</a></li>
					<li><a href="category.html#">4</a></li>
					<li><a href="category.html#">5</a></li>
					<li><a href="category.html#"><i class="fa fa-caret-right"></i></a></li>
				</ul><!--pagination-->

			</div>
			<div class="col-md-3"><!--sidebar-->
				@if (count($cats) > 0)

                <div class="title-bg">
                    <div class="title">Categories</div>
                </div>

                <div class="categorybox">
                    <ul>
                        @foreach ($cats as $cat)

                            <li style="white-space: nowrap;" ><a href="{{ route('category.one',[$cat['id']]) }}">{{ $cat['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="ads">
                    <a href="product.html"><img src="images/ads.png" class="img-responsive" alt=""/></a>
                </div>
                @endif

				<div class="ads">
					<a href="product.html"><img src="images/ads.png" class="img-responsive" alt="" /></a>
				</div>

				@if (count($top_k) > 0)
                <div class="title-bg">
                    <div class="title">Best Seller</div>
                </div>
				<div class="best-seller">
					<ul>
					@foreach ($top_k as $t)
						<li class="clearfix">
							<a href="product.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="product.html#" class="smalltitle2">{{$t['name']}}</a>
								<p class="smallprice2">Price : ${{$t['price']}}</p>
							</div>
						</li>
						@endforeach
						{{-- <li class="clearfix">
							<a href="product.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="product.html#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
						<li class="clearfix">
							<a href="product.html#"><img src="images/demo-img.jpg" alt="" class="img-responsive mini" /></a>
							<div class="mini-meta">
								<a href="product.html#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
					</li> --}}

					</ul>
				</div>
				@endif

			</div><!--sidebar-->
		</div>
		<div class="spacer"></div>
</div>
@stop
