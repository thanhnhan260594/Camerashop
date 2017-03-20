@extends('user.master')

@section('content')
	<!--BANNER-->
		@include('user.blocks.banner')
	<!--END BANNER-->
<div id="mainBody">
	<div class="container">
		<div class="row">
		<!--SLIDEBAR-->
			@include('user.blocks.slide')
		<!--END SLIDEBAR-->
			<div class="span9">		
				<div class="well well-small">
					<h4>Sản phẩm mới </h4>
					<div class="row-fluid">
					
						<div id="featured" class="carousel slide">
							<div class="carousel-inner">
							
						  		<div class="item active">
								  <ul class="thumbnails">
								 	@foreach($product as $item)		  	
									<li class="span4">
									  <div class="thumbnail">
									  <i class="tag"></i>
										<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt=""></a>
										<div class="caption">
										  <h5>{!!$item->name!!}</h5>
										  <h4><a class="btn btn-primary" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">CHI TIẾT</a> 
										  <a class="pull-right" style="color:#f2464e" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">{!!number_format("$item->price",0,",",".")!!} VNĐ</a>
										  </h4>
										</div>
									  </div>
									</li>
									@endforeach		
								  </ul>
						  		</div>
						  		
							   	<div class="item">
								  <ul class="thumbnails">
									@foreach($product as $item)
									<li class="span4">
									  <div class="thumbnail">
									  <i class="tag"></i>
										<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt=""></a>
										<div class="caption">
										  <h5>{!!$item->name!!}</h5>
										  <h4><a class="btn btn-primary" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">CHI TIẾT</a> 
										  <a class="pull-right" style="color:#f2464e" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">{!!number_format("$item->price",0,",",".")!!} VNĐ</a>
										  </h4>
										</div>
									  </div>
									</li>
									@endforeach
									
								  </ul>
							  	</div>
							  	
							  	
				    		</div>
							  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
							  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
					  	</div>
				  	</div>
				</div>
					<h4>Sản phẩm bán chạy</h4>
						  <ul class="thumbnails">
						  	@foreach($product_hot as $item)
							<li class="span3">
							  <div class="thumbnail">
								<a  href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt=""/></a>
								<div class="caption">
								  <h5><a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"> {!!$item->name!!}</a></h5>
								  <h4 style="text-align:center"> <a class="btn btn-primary" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">CHI TIẾT</a>  <a class="pull-right" style="color:#f2464e" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">{!!number_format("$item->price",0,",",".")!!} VNĐ</a></h4>
								</div>
							  </div>
							</li>
							@endforeach
							
						  </ul>	
			  	<div class="pagination">
					<ul>
						@if($product_hot->currentPage() != 1)
						<li><a href="{!!str_replace('/?','?',$product_hot->url($product_hot->currentPage()-1)) !!}">&lsaquo;</a></li>
						@endif
						@for($i = 1; $i <= $product_hot->lastPage(); $i = $i +1)
						<li class="{!!($product_hot->currentPage() == $i) ? 'active' : '' !!}"><a href="{!!str_replace('/?','?',$product_hot->url($i)) !!}">{{$i}}</a></li>
						@endfor
						@if($product_hot->currentPage() != $product_hot->lastPage())
						<li><a href="{!!str_replace('/?','?',$product_hot->url($product_hot->currentPage()+1)) !!}">&rsaquo;</a></li>
						@endif
					</ul>
				</div>
				<br class="clr"/>
			</div>
		</div>
	</div>
</div>
@endsection()