@extends('front.layout.base')

@section('content')
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ URL::asset('img/bananer1.jpg')}}">
			</div>
			<div class="item">
				<img src="{{ URL::asset('img/bananer1.jpg')}}">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div>
			<h4 class="sm-title"><span>推荐产品</span></h4>
			<div class="sm-product-command">
				<div class="sm-product-command-item">
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
			</div>
		</div>
	</div>
@endsection

@section('customJs')
<script type="text/javascript">
	$('.sm-product-item').draw();
</script>
@endsection