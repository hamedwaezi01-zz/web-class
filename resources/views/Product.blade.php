@extends('layouts.main_layout')

@section('title'){{$item['name']}} @stop

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        function remove_from_chart(){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                type: "DELETE",
                url: '{{route('item.delete.chart', ['gid'=>$item->groups['id'], 'id'=>$item['id']])}}',
                data: "",
                success: function (data){
                    console.log("DELETE  "+JSON.parse(data));
                    data = JSON.parse(data);
                    const b = document.getElementById("remove_item");
                    const a = document.getElementById("add_item");
                    if (data.status == 1){
                        Array.from(b).map(element => element.style.display = "none");
                        Array.from(a).map(element => element.style.display = "block");
                    }else{
                        Array.from(a).map(element => element.style.display = "none");
                        Array.from(b).map(element => element.style.display = "block");
                    }
                }
            });
        }

        function add_to_chart(){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                type:"POST",
                url: "{{route('item.add.chart',['gid'=>$item->groups['id'], 'id'=>$item['id']] )}}",
                data: {
                    dataa: "Adding new item to chart"
                    },
                success: function(data){
                    console.log("POST  "+JSON.parse(data));
                    data = JSON.parse(data);
                    if (data.status == 1){
                        document.getElementById("add_item").style.display = "none";
                        document.getElementById("remove_item").style.display = "inline-block";
                    }else{
                        document.getElementById("add_item").style.display = "inline-block";
                        document.getElementById("remove_item").style.display = "none";
                    }
                }
            });
        }

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

                        </div>
                        <div class="col-md-6 det-desc">
                            <div class="productdata">
                                <div style="white-space: nowrap;" class="infospan">Item ID <span>{{$item['id']}}</span></div>
                                <div style="white-space: nowrap;" class="infospan">Price <span>{{$item['price']}}</span></div>
                                <div style="white-space: nowrap;" class="infospan">Category <span>{{$item->groups['name']}}</span></div>
                                    <div class="average">
                                    <form role="form">
                                    <div class="form-group">
                                        <div class="clearfix"></div>
                                    </div>
                                    </form>
                                    </div>
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
                                    <div class="ava">
                                        @if (Auth::check())
                                        <div class="col-sm-4">
                                            @if($item['charted'])
                                            <div id="add_item">
                                                <button style="display: none" onclick="add_to_chart()" class="btn btn-default btn-primary btn-sm"><span class="addchart">Add to Chart</span></button>
                                            </div>
                                            <div id="remove_item">
                                                <button onclick="remove_from_chart()" class="btn btn-default btn-danger btn-sm"><span class="addchart">Remove from Chart</span></button>
                                            </div>
                                            @else
                                            <div id="remove_item">
                                                <button style="display: none" onclick="remove_from_chart()" class="btn btn-default btn-danger btn-sm"><span class="addchart">Remove from Chart</span></button>
                                            </div>
                                            <div id="add_item">
                                                <button onclick="add_to_chart()" class="btn btn-default btn-primary btn-sm"><span class="addchart">Add to Chart</span></button>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                        @else
                                        <button disabled class="btn btn-default btn-primary btn-sm"><span class="addchart">Login to buy</span></button>
                                        @endif

                                    </div>
                            </div>
                        </div>
					</div>

					<div class="tab-review">
                        <ul id="myTab" class="nav nav-tabs shop-tab">
                                <li class="active"><a href="product.html#desc" data-toggle="tab">Description</a></li>
                                <li class=""><a href="#rev" data-toggle="tab">Reviews ({{count($reviews)}})</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content shop-tab-ct">
                            <div class="tab-pane fade active in" id="desc">
                                    <p>{{$item['description']}}</p>
                            </div>
                            <div class="tab-pane fade" id="rev">
                                @foreach($reviews as $rev)
                                <p class="dash">
                                <span>{{$rev->user['name']}}  |  </span>{{$rev['created_at']}}<br/><br/>
                                {{$rev['description']}}
                                </p>
                                @endforeach
                                <h4>Write Review</h4>
                            <form id="review-form" method="POST"
                            action="{{route('review.add', ['gid'=>$item->groups['id'], 'id'=>$item['id']])}}">
                            @csrf
                                <div class="form-group">
                                    <textarea class="form-control" id="text" name="text"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="clearfix"></div>
                                </div>
                                <button type="submit" class="btn btn-red btn-sm">Submit</button>
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
									<span class="smalldesc">Item No. {{$item['id']}}</span>
								</div>
							</div>
						@endforeach
					</div><!--Products-->
					<div class="spacer"></div>
			</div><!--Main content-->
			<div class="col-md-3">
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
					</ul>
				</div>
				@endif

			</div>
	</div>
</div>
@stop
