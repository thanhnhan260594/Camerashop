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
					<h3 class="panel-title">Danh sách danh mục</h3>									
				</div>
				<div class="panel-body">
				<a href="{{asset('/admin/cate/add')}}">
				<button type="button"  class="btn btn-primary">Thêm</button></a>
				<br>
					<table class="table table-hover">
						<thead>
							<tr>								
								<th></th>
								<th>Tên danh mục</th>
								<th>Mô tả</th>
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
								
								<td>{!! $item["description"]!!}</td>
								<td class="center">
									<a href="{!!URL::route('admin.cate.getEdit',$item['id'])!!}"><i class="lnr lnr-pencil"></i></a>
									|
									<a onclick="return xacnhanXoa('Bạn có muốn xóa!')" href="{!!URL::route('admin.cate.getDelete',$item['id'])!!}"><i class="lnr lnr-trash"></i></a>
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