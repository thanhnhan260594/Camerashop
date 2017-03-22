@extends('admin.master')
@section('content')

<div class="main-content">
	<div class="container-fluid ">
		<!-- OVERVIEW -->
		<div class="panel panel-headline ">
			<div class="panel-heading ">
				<h3 class="panel-title">Sửa danh mục sản phẩm</h3></div>
			<div class="panel-body ">			
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					@include('admin.blocks.error')
					<p class="text-primary">Tên sản phẩm</p>
						<input class="form-control" placeholder="Tên sản phẩm" type="text" name="txtSanPham" value="{{old ('txtSanPham',isset($product) ? $product['name'] : null)}}">
					<br>
					<p class="text-primary">Tên danh mục</p>
						<select class="form-control" placeholder="Tên sản phẩm" type="text" name="sltDanhMuc" > 
						<option value="{{old ('sltDanhMuc',isset($product) ? $product['id_cate'] : null)}}"> {{old ('sltDanhMuc',isset($product) ? $product['id_cate'] : null)}}</option>
						@foreach($cate as $item) 
							<option value="{!!$item['id']!!}">{!!$item["name"]!!}</option>
						@endforeach
						</select> 
					<br>
					<p class="text-primary">Tên thương hiệu</p>
						<select class="form-control" placeholder="Tên sản phẩm" type="text" name="stlThuongHieu"> 
						<option value="{{old ('stlThuongHieu',isset($product) ? $product['id_brand'] : null)}}">{{old ('stlThuongHieu',isset($product) ? $product['id_brand'] : null)}} </option>
						@foreach($brand as $item) 
							<option value="{!!$item['id']!!}">{!!$item["name"]!!}</option>
						@endforeach
						</select> 
					<br>
					<p class="text-primary">Số lượng</p>
						<input class="form-control" placeholder="0" type="number" name="txtSoLuong" value="{{old ('txtSoLuong',isset($product) ? $product['quantity'] : null)}}">
					<br>
					<p class="text-primary">Giá</p>
						<input class="form-control" placeholder="0" type="number" name="txtGia" value="{{old ('txtGia',isset($product) ? $product['price'] : null)}}">
					<br>
					<p class="text-primary">Mô tả</p>
						<textarea class="form-control" placeholder="Mô tả" rows="5" type="text" name="txtMoTa">{!!old ('txtMoTa',isset($product) ? $product['description'] : null)!!}</textarea>
						<script type="text/javascript"> ckeditor ("txtMoTa")</script>
					<br>
					<p class="text-primary">Ảnh đại diện</p>
						<img src="{{ asset("public/uploads/". $product["image"])}}" width="160px" />						
						<input type="hidden" name="fHinh1" value="{!!$product['image'] !!}" > 

						<input class="form-control" placeholder="" type="file" name="fHinhAnh">
					<br>
										
						<button type="submit" class="btn btn-primary">Lưu</button> 											
					<a href="{{asset('/admin/product/')}}">
						<button type="button" class="btn btn-danger">Quay lại</button>	
					</a>							
											
				</form>
			</div>
			<div class="col-md-2"></div>							
			</div>
		</div>
		<!-- END OVERVIEW -->
	</div>
</div>
@endsection() 