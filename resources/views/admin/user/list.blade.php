@extends('admin.master')
@section('content')	

<div class="main-content">
	<div class="container-fluid ">
		<!-- OVERVIEW -->
		<div class="panel panel-headline ">
			<div class="panel-heading ">
				<h3 class="panel-title">Thông tin khách hàng</h3>
			</div>
				<table class="table table-hover">
						<thead>
							<tr>								
								<th></th>
								<th>Họ và Tên</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>								
							</tr>
						</thead>
						<tbody>
						<?php $stt = 0; ?>						
							@foreach($data as $item)
							<?php $stt = $stt +1 ; ?>
							<tr>
								<td>{!! $stt!!}</td>
								<td>{!! $item["name"]!!}</td>								
								<td>{!! $item["email"]!!}</td>								
								<td>{!! $item["phone"]!!}</td>
								<td>{!! $item["address"]!!}</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
		</div>
	</div>
</div>
@endsection() 