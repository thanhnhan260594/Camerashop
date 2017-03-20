@extends('admin.master')

@section('content')

<!-- MAIN CONTENT -->
<div class="main-content">

	<div class="container-fluid ">
		<!-- OVERVIEW -->
		<div class="panel panel-headline ">
			<div class="panel-heading ">
				<h3 class="panel-title">Thêm thương hiệu sản phẩm mới</h3></div>
			<div class="panel-body ">
			
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="{!! route('admin.brand.getAdd') !!}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					@include('admin.blocks.error')
					<p class="text-primary">Tên thương hiệu</p>
						<input class="form-control" placeholder="Tên thương hiệu" type="text" name="txtThuongHieu">
					<br>
					<p class="text-primary">Mô tả</p>
						<textarea class="form-control" placeholder="Mô tả" rows="5" type="text" name="txtMoTa"></textarea>
						<script type="text/javascript"> ckeditor ("txtMoTa")</script>
					<br>
					<p class="text-primary">Logo</p>
						<input class="form-control" placeholder="" type="file" name="fLogo">
					<br>
					<div>
						<button type="submit" class="btn btn-primary">Lưu</button> 											
					<a href="{{asset('/admin/brand/')}}">
						<button type="button" class="btn btn-danger">Quay lại</button>	
					</a>							
					</div>				
				</form>
			</div>

			<div class="col-md-2"></div>
				
			
			</div>
		</div>
		<!-- END OVERVIEW -->
	</div>
</div>

@endsection() 