@extends('user.master')

@section('content')

<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Liên hệ</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4> Gửi mail</h4>
			<form action="{!! url('lien-he') !!}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		        <fieldset>
		          <div class="control-group">
		              <input type="text" placeholder="Họ và tên" class="input-xlarge" name="txtName"/>
		          </div>
				   <div class="control-group">
		              <input type="text" placeholder="Email" class="input-xlarge" name="txtEmail"/>
		          </div>
				   <div class="control-group">
		              <input type="text" placeholder="Tiêu đề" class="input-xlarge" name="txtSubject"/>
		          </div>
		          <div class="control-group">
		              <textarea rows="8" id="textarea" class="input-xlarge" name="txtContent"></textarea>
		          </div>
		            <button class="btn btn-success" type="submit">Gửi liên hệ</button>
		        </fieldset>
	      	</form>
		</div>
		<div class="span8">
		<h4>Thông tin liên hệ</h4>
		<p>	<b>Địa chỉ:</b> 475A, Điện Biên Phủ, Phường 15, Quận Bình Thạnh,TP HCM<br/><b>Điện thoại:</b> 090 888 6868 </p>
		<h4>Bản đồ</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.5626333817072!2d106.71153756873285!3d10.801716708533903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a531ae261b%3A0x9cefc9840d9823c1!2zNDc1IMSQaeG7h24gQmnDqm4gUGjhu6csIHBoxrDhu51uZyAyMSwgQsOsbmggVGjhuqFuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1489972939748" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
				<br />
		</div>
		
	</div>

</div>
</div>

@endsection