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
				    <ul class="breadcrumb">
						<li><a href="{{url('/')}}">Trang chủ</a> <span class="divider">/</span></li>
						<a href="{!!url('loai-san-pham',[$cate->id,$cate->slug])!!}"><li class="active">{!!$cate->name!!}</li></a>
				    </ul>
					<h3> 	
					
					</h3>	
					<hr class="soft"/>
					<p>
						{!!$cate->description!!}
					</p>
					<hr class="soft"/>
					<form class="form-horizontal span6">
						<div class="control-group">
						  <label class="control-label alignL">Sắp xếp</label>
							<select>
				              <option>Theo tên A - Z</option>
				              <option>Theo tên Z - A</option>
				              <option>Giá giảm dần</option>
				              <option>Giá tăng dần</option>
				            </select>
						</div>
					  </form>
					  
					<div id="myTab" class="pull-right">
					 <a href="#listView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-list"></i></span></a>
					 <a href="#blockView" data-toggle="tab"><span class="btn btn-large "><i class="icon-th-large"></i></span></a>
					</div>
					<br class="clr"/>
					<div class="tab-content">
						<div class="tab-pane active" id="listView">
							@foreach($product_cate as $item)
							<div class="row">	  
								<div class="span2">
									<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt=""/></a>
								</div>
								<div class="span4">
									<h3><a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">{!!$item->name!!}</a></h3>				
									<hr class="soft"/>
									<h5>Tình trạng</h5>
									<p>
										{!!$item->description!!}
									</p>
									<a class="btn btn-small pull-right" href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">Chi tiết</a>
									<br class="clr"/>
								</div>
								<div class="span3 alignR">
								<form class="form-horizontal qtyFrm">
								<h3 style="color:#f2464e ">{!!number_format("$item->price",0,",",".")!!} VNĐ</h3>			
								<br/>
								  <a href="#" class="btn btn-large btn-primary">Thêm vào <i class=" icon-shopping-cart"></i></a>
								  <a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}" class="btn btn-large"><i class="icon-zoom-in"></i></a>					
								</form>
								</div>
							</div>
							<hr class="soft"/>
							@endforeach		
						</div>

						<div class="tab-pane" id="blockView">
							<ul class="thumbnails">
								@foreach($product_cate as $item)
								<li class="span3">
								  <div class="thumbnail">
									<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt="" width="200" height="250" /></a>
									<div class="caption">
									  <h5><a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}">{!!$item->name!!}</a></h5>
									  <!-- <p> 
										{!!$item->description!!}
									  </p> -->
									   <h4 style="text-align:center; color:#f2464e">{!!number_format("$item->price",0,",",".")!!} VNĐ</h4>
									</div>
								  </div>
								</li>
								@endforeach
							  </ul>
						<hr class="soft"/>
						</div>
					</div>
					<div class="pagination">
						<ul>
							@if($product_cate->currentPage() != 1)
							<li><a href="{!!str_replace('/?','?',$product_cate->url($product_cate->currentPage()-1)) !!}">&lsaquo;</a></li>
							@endif
							@for($i = 1; $i <= $product_cate->lastPage(); $i = $i +1)
							<li class="{!!($product_cate->currentPage() == $i) ? 'active' : '' !!}"><a href="{!!str_replace('/?','?',$product_cate->url($i)) !!}">{{$i}}</a></li>
							@endfor
							@if($product_cate->currentPage() != $product_cate->lastPage())
							<li><a href="{!!str_replace('/?','?',$product_cate->url($product_cate->currentPage()+1)) !!}">&rsaquo;</a></li>
							@endif
						</ul>
					</div>
					<br class="clr"/>
				</div>
		</div>
	</div>
</div>
@endsection()