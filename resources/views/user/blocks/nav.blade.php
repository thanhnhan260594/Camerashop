<div id="logoArea" class="navbar">
		<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		  <div class="navbar-inner">
		    <a class="brand" href="{{url('/')}}"><img src="{{url('public/user/images/logo-camerashop.png')}}" alt="Bootsshop"/></a>
				<form class="form-inline navbar-search" method="post" action="products.html" >
				<input id="srchFld" class="srchTxt" type="text" />
			  	<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
		    </form>
		    <ul id="topMenu" class="nav pull-right">
		    <li class=""><a href="{{url('/gioi-thieu')}}">Giới thiệu</a></li>
			 <li class=""><a href="{{url('/dich-vu')}}">Dịch vụ</a></li>
			 <li class=""><a href="{{url('/tin-tuc')}}">Tin tức</a></li>
			 <li class=""><a href="{{url('/lien-he')}}">Liên hệ</a></li>
			 <li class="">
			 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Đăng nhập</span></a>
			<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>Đăng nhập</h3>
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal loginFrm">
					  <div class="control-group">								
						<input type="text" id="inputEmail" placeholder="Email">
					  </div>
					  <div class="control-group">
						<input type="password" id="inputPassword" placeholder="Password">
					  </div>
					  <div class="control-group">
						<label class="checkbox">
						<input type="checkbox"> Nhớ mật khẩu
						</label>
					  </div>
					<button type="submit" class="btn btn-success">Đăng nhập</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Thoát</button>
					</form>
				  </div>
			</div>
			</li>
		    </ul>
		  </div>
		</div>