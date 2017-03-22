@extends('admin.master')

@section('content')

<!-- MAIN CONTENT -->
<div class="main-content">

	<div class="container-fluid ">
		<!-- OVERVIEW -->
		<div class="panel panel-headline ">
			<div class="panel-heading ">
				<h3 class="panel-title">Thêm sản phẩm mới</h3></div>
			<div class="panel-body ">
			
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="{!! route('admin.product.getAdd') !!}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					@include('admin.blocks.error')
					<p class="text-primary">Tên sản phẩm</p>
						<input class="form-control" placeholder="Tên sản phẩm" type="text" name="txtSanPham">
					<br>
					<p class="text-primary">Tên danh mục</p>
						<select class="form-control" placeholder="Tên sản phẩm" type="text" name="sltDanhMuc"> 
						<option value="0"> Vui lòng chọn danh mục</option>
						@foreach($cate as $item) 
							<option value="{!!$item['id']!!}">{!!$item["name"]!!}</option>
						@endforeach
						</select> 
					<br>
					<p class="text-primary">Tên thương hiệu</p>
						<select class="form-control" placeholder="Tên sản phẩm" type="text" name="stlThuongHieu"> 
						<option value="0"> Vui lòng chọn thương hiệu</option>
						@foreach($brand as $item) 
							<option value="{!!$item['id']!!}">{!!$item["name"]!!}</option>
						@endforeach
						</select> 
					<br>
					<p class="text-primary">Số lượng</p>
						<input class="form-control" placeholder="0" type="number" name="txtSoLuong">
					<br>
					<p class="text-primary">Giá</p>
						<input class="form-control" placeholder="0" type="number" name="txtGia">
					<br>
					<p class="text-primary">Mô tả</p>
						<textarea class="form-control" placeholder="Mô tả" rows="5" type="text" name="txtMoTa"></textarea>
						<script type="text/javascript"> ckeditor ("txtMoTa")</script>
					<br>
					<p class="text-primary">Ảnh đại diện</p>
						<input class="form-control" placeholder="" type="file" name="fHinhAnh">
					<br>
					<!-- <p class="text-primary">Tình trạng:<input type="checkbox" name="chkTinhTrang" class="form-control"></p>
					<br> -->					
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