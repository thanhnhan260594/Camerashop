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
					<li><a href="{{url('/')}}">Home</a> <span class="divider">/</span></li>
					<a href="{!!url('chi-tiet-san-pham',[$pdetail->id,$pdetail->slug])!!}"><li class="active">{!!$pdetail->name!!}</li>
			    </ul>	
				<div class="row">	  
					<div id="gallery" class="span3">
				            <a href="{{url('public/uploads/'.$pdetail->image)}}" title="{!!$pdetail->name!!}">
								<img src="{{url('public/uploads/'.$pdetail->image)}}" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
				            </a>
							<div id="differentview" class="moreOptopm carousel slide">
				                <!-- <div class="carousel-inner">
				                  <div class="item active">
				                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
				                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
				                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
				                  </div>
				                  <div class="item">
				                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
				                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
				                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
				                  </div>
				                </div> -->
				              <!--  
							  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
				              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
							  -->
				              </div>
							  
							 <div class="btn-toolbar">
							  <!-- Nhúng like, share facebook -->
							</div>
					</div>
						<div class="span6">
							<h3> {!!$pdetail->name!!} </h3>
							<small> {!!$pdetail->name!!} </small>
							<hr class="soft"/>
							<form class="form-horizontal qtyFrm">
							  <div class="control-group">
								<label class="control-label"><span style="color:#f2464e" >{!!number_format("$pdetail->price",0,",",".")!!} VNĐ</span></label>
								<div class="controls">
								<span>Số lượng</span>
								<input type="number" class="span1" placeholder="Qty."/>
								  <button type="submit" class="btn btn-large btn-primary pull-right"> Mua hàng  <i class=" icon-shopping-cart"></i></button>
								</div>
							  </div>
							</form>
							<hr class="soft"/>
							<h4>Sản phẩm còn: {!!$pdetail->quantity!!}</h4>
							<hr class="soft clr"/>
							{!!$pdetail->description!!}
							<br class="clr"/>
							<a class="btn btn-small btn-info pull-right" href="#detail">Chi tiết</a>
							<br class="clr"/>
						<a href="#" name="detail"></a>
						<hr class="soft"/>
						</div>
						
						<div class="span9">
			            <ul id="productDetail" class="nav nav-tabs">
			              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
			              <li><a href="#profile" data-toggle="tab">Related Products</a></li>
			            </ul>
			            <div id="myTabContent" class="tab-content">
			              <div class="tab-pane fade active in" id="home">
						  <h4>Thông tin sản phẩm</h4>
			                <table class="table table-bordered">
							<tbody>
							<tr class="techSpecRow"><th colspan="2">Chi tiết sản phẩm</th></tr>
							<tr class="techSpecRow"><td class="techSpecTD1">Thương hiệu: </td><td class="techSpecTD2">Fujifilm</td></tr>
							<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
							<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
							<tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
							<tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>
							</tbody>
							</table>				
							</p>
			              </div>
				<div class="tab-pane fade" id="profile">
					<div id="myTab" class="pull-right">
					 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
					 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
					</div>
					<br class="clr"/>
					<hr class="soft"/>
				<div class="tab-content">
					<div class="tab-pane" id="listView">
						
							<div class="row">	  
								<div class="span2">
									<img src="{{url('public/user/images/products/product.png')}}" alt=""/>
								</div>
									<div class="span4">
										<h3>Tên sản phẩm</h3>				
										<hr class="soft"/>
										<h5>Tình trạng</h5>
										<p>
										Mô tả
										</p>
										<a class="btn btn-small pull-right" href="#">Chi tiết</a>
										<br class="clr"/>
									</div>
						<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
							<h3> $140.00</h3>
							<label class="checkbox">
							
							</label><br/>
							
							<a href="#" class="btn btn-large btn-primary">Mua hàng vào <i class=" icon-shopping-cart"></i></a>
							<a href="#" class="btn btn-large"><i class="icon-zoom-in"></i></a>
							
						</form>
						</div>
					</div>
					<hr class="soft"/>
						<div class="row">	  
						<div class="span2">
							<img src="{{url('public/user/images/products/product.png')}}" alt=""/>
						</div>
						<div class="span4">
							<h3>Tên sản phẩm</h3>				
							<hr class="soft"/>
							<h5>Tình trạng</h5>
							<p>
							Mô tả
							</p>
							<a class="btn btn-small pull-right" href="#">Chi tiết</a>
							<br class="clr"/>
						</div>
						<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
							<h3> $140.00</h3>
							<label class="checkbox">
							
							</label><br/>
							
							<a href="#" class="btn btn-large btn-primary">Mua hàng vào <i class=" icon-shopping-cart"></i></a>
							<a href="#" class="btn btn-large"><i class="icon-zoom-in"></i></a>
							
						</form>
						</div>
					</div>
					<hr class="soft"/>
						
						
					</div>
						<div class="tab-pane active" id="blockView">
							<ul class="thumbnails">
								<li class="span3">
								  <div class="thumbnail">
									<a href="product_details.html"><img src="{{url('public/user/images/products/product.png')}}" alt=""/></a>
									<div class="caption">
									  <h5>Tên sản phẩm</h5>
									  <p> 
										Mô tả 
									  </p>
									  <h4 style="text-align:center"><a class="btn" href="#">Mua hàng <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								  </div>
								</li>
								<li class="span3">
								  <div class="thumbnail">
									<a href="product_details.html"><img src="{{url('public/user/images/products/product.png')}}" alt=""/></a>
									<div class="caption">
									  <h5>Tên sản phẩm</h5>
									  <p> 
										Mô tả 
									  </p>
									  <h4 style="text-align:center"><a class="btn" href="#">Mua hàng <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								  </div>
								</li>
								<li class="span3">
								  <div class="thumbnail">
									<a href="product_details.html"><img src="{{url('public/user/images/products/product.png')}}" alt=""/></a>
									<div class="caption">
									  <h5>Tên sản phẩm</h5>
									  <p> 
										Mô tả 
									  </p>
									  <h4 style="text-align:center"><a class="btn" href="#">Mua hàng <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
									</div>
								  </div>
								</li>

								
							  </ul>
						<hr class="soft"/>
						</div>
					</div>
				<br class="clr">
				</div>
					</div>
			          </div>
				</div>
				<!-- Nhúng facebook comment -->
			</div>
		</div>
	</div>
</div>


@endsection()