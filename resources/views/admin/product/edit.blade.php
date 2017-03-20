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
				<form action="" method="POST">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					@include('admin.blocks.error')
					<p class="text-primary">Tên danh mục</p>
						<input class="form-control" placeholder="Tên danh mục" type="text" name="txtDanhMuc" value="{!! old('txtDanhMuc',isset($data)? $data['name'] : null)!!}">
					<br>
					<p class="text-primary">Mô tả</p>
						<textarea class="form-control" placeholder="Mô tả" rows="5" type="text" name="txtMoTa">{!! old('txtMoTa',isset($data)? $data['description'] : null)!!}</textarea>
					<br>
					<p class="text-primary">Slug</p>
						<input class="form-control" placeholder="" type="text" name="txtSlug" value="{!! old('txtSlug',isset($data)? $data['slug'] : null)!!}">
					<br>					
						<button type="submit" class="btn btn-primary">Lưu</button> 											
					<a href="{{asset('/admin/cate/')}}">
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