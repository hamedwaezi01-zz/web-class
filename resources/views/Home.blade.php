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
            @foreach($slides as $s)
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>{{$s->item['name']}}</h1>
						<p>
							{{$s->item['description']}}
						</p>
						<button class="btn btn-default btn-red btn-lg">Add to cart</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
                                @if ($s->item['discount'] > 0)
								<span class="oldprice">${{$s->item['price']}}</span>
								<span>${{$s->item['price'] - $s->item['discount']}}</span>
                                <span class="ondeal">Best Deal</span>
                                @else
								<span>${{$s->item['price'] - $s->item['discount']}}</span>

                                @endif
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="{{Voyager::image($s['image'])}}" alt="" class="img-responsive"/>
				</div>
            </div>
            @endforeach
		</div>
	</div>
	<div class="bar"></div>
	<div id="sync2" class="owl-carousel">
        @foreach ($slides as $s)
        <div class="item">
			<div class="slide-type-1-sync">
				<h3>{{$s->item['name']}}</h3>
				<p>Item No. {{$s->item['id']}}</p>
			</div>
		</div>
        @endforeach
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
				<div class="row prdct">
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
				</div>
				<div class="spacer"></div>
			</div><!--Main content-->
			<div class="col-md-3">
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
			</div>

		</div>
	</div>
@stop
