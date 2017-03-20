@extends('admin.master')

@section('content')


<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="col-lg-12">
				@if(Session::has('flash_message'))
					<div class="alert alert-{!! Session::get('flash_level')!!}">
					{!! Session::get('flash_message')!!}
					</div>
				@endif
			</div>
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách sản phẩm</h3>									
				</div>
				<div class="panel-body">
				<a href="{{URL('/admin/product/add')}}">
				<button type="button"  class="btn btn-primary">Thêm</button></a>
				<br>
					<table class="table table-hover">
						<thead>
							<tr>								
								<th></th>
								<th>Tên sản phẩm</th>
								<th>Hình đại diện</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Mô tả</th>
								<th>Loại</th>
								<th>Hãng</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php $stt = 0; ?>						
							@foreach($data as $item)
							<?php $stt = $stt +1 ; ?>
							<tr>
								<td>{!! $stt!!}</td>
								<td>{!! $item["name"]!!}</td>
								<td>
								
								<img src="{{ asset("public/uploads/". $item["image"])}}" width="100px" />								
								</td>
								<td>{!! number_format($item["price"],0,",",".")!!} VNĐ</td>
								<td>{!! $item["quantity"]!!}</td>
								<td>{!! $item["description"]!!}</td>
								<td>
								<?php $cate=DB::table('cates')->where('id',$item["id_cate"])->first()?>
										@if(!empty($cate->name))
											{!!$cate->name!!}
										@endif
								</td>
								<td>
								<?php $brand=DB::table('brands')->where('id',$item["id_brand"])->first()?>
										@if(!empty($brand->name))
											{!!$brand->name!!}
										@endif
								</td>
								<td class="center">
									<a href="{!!URL::route('admin.product.getEdit',$item['id'])!!}"><i class="lnr lnr-pencil"></i></a>
									
									<a onclick="return xacnhanXoa('Bạn có muốn xóa!')" href="{!!URL::route('admin.product.getDelete',$item['id'])!!}"><i class="lnr lnr-trash"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END OVERVIEW -->	
	</div>
</div>

@endsection() 