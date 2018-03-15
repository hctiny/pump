@extends('front.layout.base')

@section('content')
	<div class="container sm-bg-white">
		<h4 class="sm-title"><span>联系我们</span></h4>
		<div class="row">
			<div class="col-sm-4">
				<img class="sm-about-image" src="{{ URL::asset('img/about.jpg')}}">
			</div>
			<div class="col-sm-8">
				<h4>台州仨民机电有限公司</h4>
				<p>电话：0576-86352800</p>
				<p>传真：0576-86352800</p>
				<p>手机：13777630655、158654255</p>
				<p>地址：浙江省台州市温岭市山市东大街xxx号</p>
			</div>
		</div>
		<div class="row">
			<div id="map">
				
			</div>			
		</div>
	</div>
@endsection