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
					<li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
					<a href="{!!url('thuong-hieu',[$brand->id,$brand->slug])!!}"><li class="active">{!!$brand->name!!}</li></a>
			    </ul>
					<a href="{!!url('thuong-hieu',[$brand->id,$brand->slug])!!}">
					<img src="{{url('public/uploads/logo/'.$brand->logo)}}" alt="" height="100px" width="300" /></a>
				<hr class="soft"/>
				<p>
					{!!$brand->description!!}
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
						@foreach($product_brand as $item)
						<div class="row">	  
							<div class="span2">
								<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><img src="{{url('public/uploads/'.$item->image)}}" alt=""/></a>
							</div>
							<div class="span4">
								<a href="{!!url('chi-tiet-san-pham',[$item->id,$item->slug])!!}"><h3>{!!$item->name!!}</h3>	</a>			
								<hr class="soft"/>
								<h5>Mô tả</h5>
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
							@foreach($product_brand as $item)
							<li class="span3">
							  <div class="thumbnail">
								<a href="#"><img src="{{url('public/uploads/'.$item->image)}}" alt="" width="200" height="250" /></a>
								<div class="caption">
								  <h5>{!!$item->name!!}</h5>				
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
						@if($product_brand->currentPage() != 1)
						<li><a href="{!!str_replace('/?','?',$product_brand->url($product_brand->currentPage()-1)) !!}">&lsaquo;</a></li>
						@endif
						@for($i = 1; $i <= $product_brand->lastPage(); $i = $i +1)
						<li class="{!!($product_brand->currentPage() == $i) ? 'active' : '' !!}"><a href="{!!str_replace('/?','?',$product_brand->url($i)) !!}">{{$i}}</a></li>
						@endfor
						@if($product_brand->currentPage() != $product_brand->lastPage())
						<li><a href="{!!str_replace('/?','?',$product_brand->url($product_brand->currentPage()+1)) !!}">&rsaquo;</a></li>
						@endif
					</ul>
				</div>
				<br class="clr"/>
			</div>
		</div>
	</div>
</div>
@endsection()