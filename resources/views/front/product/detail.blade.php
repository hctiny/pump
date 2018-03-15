@extends('front.layout.base')

@section('content')
	<div class="container sm-bg-white">
		<div class="row">
			<div class="col-sm-4">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="{{ URL::asset('img/56bdfd2474c62.jpg')}}">
						</div>
						<div class="item">
							<img src="{{ URL::asset('img/56bdfd2474c62.jpg')}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<h4>QJD不锈钢油浸式潜水泵</h4>
				<p>产品简介：巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉</p>
				<div>
					<a class="btn btn-primary pull-right">立即购买</a>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-4 hidden-xs">
				<h4>更多产品</h4>
				<ul class="sm-more-product">
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
					<li><a>QJD不锈钢油浸式潜水泵</a></li>
				</ul>
			</div>
			<div class="col-sm-8">
				<h4>使用说明</h4>
				<p></p>
				<h4>型号说明</h4>
				<p><img src=""/></p>
				<h4>主要参数</h4>
				<p><img src=""></p>
			</div>
		</div>
	</div>
@endsection