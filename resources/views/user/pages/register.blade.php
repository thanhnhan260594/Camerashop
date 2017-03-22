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
					<a href="{!!url('/dang-ky')!!}"><li class="active">Đăng ký</li></a>
			    </ul>
				<h3> Đăng ký tài khoản</h3>	
				<div class="well">
				<!--
					<div class="alert alert-info fade in">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					 </div>
					<div class="alert fade in">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					 </div>
					 <div class="alert alert-block alert-error fade in">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					 </div> -->
					<form class="form-horizontal" action="" method="POST">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<h4>Thông tin tài khoản</h4>
					<div class="control-group">
						<label class="control-label" for="input_email">Email <sup>(*)</sup></label>
						<div class="controls">
						  <input type="text" id="input_email" placeholder="Hutech2017@hutech.edu.vn" name="txtEmail"> 
						</div>
					</div>	  
					<div class="control-group">
						<label class="control-label" for="inputPassword1">Mật khẩu <sup>(*)</sup></label>
						<div class="controls">
						  <input type="password" id="inputPassword1" placeholder="************" name="txtPassword">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword1">Nhập lại mật khẩu <sup>(*)</sup></label>
						<div class="controls">
						  <input type="password" id="inputPassword1" placeholder="************" name="txtRepassword">
						</div>
					</div>	  
						<h4>Thông tin cá nhân</h4>
						<div class="control-group">
						<label class="control-label" for="inputFname1">Họ và tên <sup>(*)</sup></label>
						<div class="controls">
						  <input type="text" id="inputFname1" placeholder="Nguyễn Văn A" name="txtName">
						</div>
					 	</div>			
						<div class="control-group">
							<label class="control-label" for="address" >Địa chỉ <sup>(*)</sup></label>
							<div class="controls">
							  <input type="text" id="address" placeholder="475A, Điện Biên Phủ, Phường 25, Bình Thạnh, TP.HCM" name="txtAddress" /> <span></span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="phone">Số điện thoại <sup>(*)</sup></label>
							<div class="controls">
							  <input type="text"  name="phone" id="phone" placeholder="090 888 6868" name="txtPhone" /> <span></span>
							</div>
						</div>
					<div class="controls">
						<p><sup>(*)</sup> Những thông tin bắt buộc</p>
					</div>	
					<div class="control-group">
						<div class="controls">
							<input class="btn btn-large btn-success" type="submit" value="Đăng ký" />
						</div>
					</div>		
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection