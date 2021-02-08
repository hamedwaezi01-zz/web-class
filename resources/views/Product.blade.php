@extends('layouts.main_layout')

@section('title')Home @stop

@section('head')
        <script>
        $(document).ready(function () {$("#headerCategories").addClass("active");});
        </script>
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
							<div class="bread"><a href="/">Home</a> &rsaquo; <a href="{{ route('category.one',['gid'=>$item->groups['id']]) }}">{{$item->groups['name']}}</a> &rsaquo; Product Detail</div>
							{{-- <div class="bread"></div> --}}
							<div class="bigtitle">Product Detail</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
					<div class="title-bg">
							<div class="title">{{$item['name']}}</div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="dt-img">
                                <div class="detpricetag"><div class="inner">{{$item['price']}}</div></div>
                                <a class="fancybox" href="{{Voyager::image($item['image'])}}" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="{{Voyager::image($item['image'])}}" alt="" class="img-responsive" /></a>
                            </div>
                            {{-- <div class="thumb-img">
                                    <a class="fancybox" href="images/sample-4.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/sample-4.jpg" alt="" class="img-responsive" /></a>
                            </div>
                            <div class="thumb-img">
                                    <a class="fancybox" href="images/sample-5.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/sample-5.jpg" alt="" class="img-responsive" /></a>
                            </div>
                            <div class="thumb-img">
                                    <a class="fancybox" href="images/sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/sample-1.jpg" alt="" class="img-responsive" /></a>
                            </div> --}}
                        </div>
                        <div class="col-md-6 det-desc">
                            <div class="productdata">
                                <div style="white-space: nowrap;" class="infospan">Item ID <span>{{$item['id']}}</span></div>
                                <div style="white-space: nowrap;" class="infospan">Price <span>{{$item['price']}}</span></div>
                                <div style="white-space: nowrap;" class="infospan">Category <span>{{$item->groups['name']}}</span></div>
                                    <div class="average">
                                    <form role="form">
                                    <div class="form-group">
                                        <div class="rate"><span class="lbl">Average Rating</span>
                                        </div>
                                        <div class="starwrap">
                                                <div id="score"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    </form>
                                    </div>
                                    {{-- <h4>Available Options</h4> --}}

                                        {{-- <div class="ava"></div> --}}
                                        {{--	<div class="form-group">
                                                    <label for="mem" class="col-sm-2 control-label">Memory</label>
                                                    <div class="col-sm-10">
                                                            <select class="form-control" id="mem">
                                                                    <option>Blank 1</option>
                                                                    <option>Blank 2</option>
                                                                    <option>Blank 3</option>
                                                                    <option>Blank 4</option>
                                                                    <option>Blank 5</option>
                                                            </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="dash"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="color" class="col-sm-2 control-label">Color</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="color">
                                                        <option>Blank 1</option>
                                                        <option>Blank 2</option>
                                                        <option>Blank 3</option>
                                                        <option>Blank 4</option>
                                                        <option>Blank 5</option>
                                                    </select>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="dash"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="qty" class="col-sm-2 control-label">Qty</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="qty">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                        <button class="btn btn-default btn-red btn-sm"><span class="addchart">Add To Chart</span></button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>--}}

                                <div class="sharing">
                                    <div class="share-bt">
                                        <div class="addthis_toolbox addthis_default_style ">
                                            <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f0d0827271d1c3b"></script>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="avatock"><span>
                                    @if ($item['availability'])
                                    In Stock
                                    @else
                                    Not Available
                                    @endif
                                    </span></div>
                                </div>

                            </div>
                        </div>
					</div>

					<div class="tab-review">
                        <ul id="myTab" class="nav nav-tabs shop-tab">
                                <li class="active"><a href="product.html#desc" data-toggle="tab">Description</a></li>
                                <li class=""><a href="#rev" data-toggle="tab">Reviews (0)</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content shop-tab-ct">
                            <div class="tab-pane fade active in" id="desc">
                                    <p>{{$item['description']}}</p>
                            </div>
                            <div class="tab-pane fade" id="rev">
                                <p class="dash">
                                <span>Jhon Doe</span> (11/25/2012)<br/><br/>
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                </p>
                                <h4>Write Review</h4>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" >
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="text" ></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="rate"><span>Rating:</span></div>
                                    <div class="starwrap">
                                        <div id="default"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <button type="submit" class="btn btn-default btn-red btn-sm">Submit</button>
                            </form>

                            </div>
                        </div>
					</div>

					<div id="title-bg">
							<div class="title">Related Product</div>
					</div>

					<div class="row prdct"><!--Products-->
						@foreach ($related as $item)
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
						{{-- <div class="col-md-4">
							<div class="productwrap">
								<div class="pr-img">
									<div class="hot"></div>
									<a href="product.html"><img src="images/sample-4.jpg" alt="" class="img-responsive"/></a>
									<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
								</div>
								<span class="smalltitle"><a href="product.html">Lens</a></span>
								<span class="smalldesc">Item no.: 1000</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="productwrap">
							<div class="pr-img">
								<div class="new"></div>
								<a href="product.html"><img src="images/sample-2.jpg" alt="" class="img-responsive"/></a>
								<div class="pricetag blue"><div class="inner">$199</div></div>
							</div>
								<span class="smalltitle"><a href="product.html">Black Shoes</a></span>
								<span class="smalldesc">Item no.: 1000</span>
							</div>
						</div>
						<div class="col-md-4">
								<div class="productwrap">
								<div class="pr-img">
										<a href="product.html"><img src="images/sample-1.jpg" alt="" class="img-responsive"/></a>
										<div class="pricetag"><div class="inner">$199</div></div>
								</div>
										<span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
										<span class="smalldesc">Item no.: 1000</span>
								</div>
						</div> --}}
					</div><!--Products-->
					<div class="spacer"></div>
			</div><!--Main content-->
			<div class="col-md-3"><!--sidebar-->
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
</div>
@stop
