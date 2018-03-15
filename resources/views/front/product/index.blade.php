@extends('front.layout.base')

@section('content')
	<div class="container">
		<h4 class="sm-title"><span>产品列表</span></h4>
		<div class="sm-product-category-item">
			<h4 class="sm-product-category-name" id="category4">潜水泵</h4>
			<div class="sm-product-list">
				<div class="sm-product-list-item">
					<div class="sm-product-item">
						<div class="sm-front">
							<img class="sm-product-image" src="{{ URL::asset('img/56bdfd2474c62.jpg')}}">
							<div class="sm-product-name">
								QJD不锈钢油浸式潜水泵
							</div>
						</div>
						<div class="sm-back">
							<div class="sm-product-desc">
								巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉
							</div>
							<div class="sm-product-button">
								<a class="btn btn-default btn-sm pull-left" href="http://www.baidu.com">查看详情</a>
								<a class="btn btn-primary btn-sm pull-right" href="http://www.baidu.com">去购买</a>
							</div>
						</div>
					</div>
				</div>
				<div class="sm-product-list-item">
					<div class="sm-product-more">
						<a>查看更多</a>
					</div>
				</div>
			</div>
		</div>
		<nav class="sm-sidebar">
			<ul class="nav sm-sidenav">
				<li><a class="sm-sidenav-header">产品导航</a></li>
				<li class="active"><a href="#category1">潜水泵</a></li>
				<li><a href="#category2">潜水泵</a></li>
				<li><a href="#category3">潜水泵</a></li>
				<li><a href="#category4">潜水泵</a></li>
				<li><a class="sm-back-top" href="#">返回顶部</a></li>
			</ul>
		</nav>
	</div>
@endsection

@section('customJs')
<script type="text/javascript">
	$('.sm-product-item').draw();
</script>
@endsection