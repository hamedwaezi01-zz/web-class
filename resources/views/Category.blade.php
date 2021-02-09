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


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="/">Home</a> &rsaquo; {{$group['name']}}</div>
							<div class="bigtitle">Category</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
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
                                    <span class="smalldesc">Item no.  {{$item['id']}}</span>
								</div>
							</div>
						@endforeach
					</div>
				@endif
			</div>
			<div class="col-md-3">
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
					</ul>
				</div>
				@endif

			</div>
		</div>
		<div class="spacer"></div>
</div>
@stop
