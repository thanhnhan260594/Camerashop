<div id="sidebar" class="span3">		
		<ul class="nav nav-tabs nav-stacked">
		
		
			<li><a> DANH MỤC </a>
			<?php 
				$cate = DB::table('cates')->get();
			?>
				<ul>
				@foreach($cate as $item)
				<li><a href="{!!url('loai-san-pham',[$item->id,$item->slug])!!}"><i class="icon-chevron-right"></i>{!!$item->name!!}</a></li>
				@endforeach		
				</ul>
			</li>
			
			<li><a> THƯƠNG HIỆU  </a>
			<?php 
				$brand = DB::table('brands')->get();
			?>
				<ul>
				@foreach($brand as $item)
				<li><a href="{!!url('thuong-hieu',[$item->id,$item->slug])!!}"><i class="icon-chevron-right"></i>{!!$item->name!!}</a></li>
				@endforeach		
				</ul>
			</li>			
		</ul>
		<br/>
			  <br/>
			<div class="thumbnail">
				<img src="public/user/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Hình thức thanh toán</h5>
				</div>
			  </div>
	</div>