@extends('user.master')

@section('content')
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<ul class="breadcrumb">
		<li><a href="{{url('/')}}">Trang chủ</a> <span class="divider">/</span></li>
		<a href="{!!url('/tin-tuc')!!}"><li class="active">Tin tức</li></a>
    </ul>
	<hr class="soften"/>


</div>	
</div>

@endsection