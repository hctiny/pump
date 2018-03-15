@extends('front.layout.base')

@section('content')
	<div class="container sm-bg-white">
		<h4 class="sm-title"><span>关于我们</span></h4>
		<div class="row">
			<div class="col-sm-4 hidden-xs">
				<img class="sm-about-image" src="{{ URL::asset('img/about.jpg')}}">
			</div>
			<div class="col-sm-8">
				<p>上海繁峰机电有限公司核心产品是冷热水循环泵、屏蔽 式自动增压泵、全自动自吸泵、小型潜水泵、工业排污泵等。 创新的产品，过硬的质量，使繁峰水泵畅销全国二十多个省 市，并远销亚洲、欧洲、中东多个国家和地区，树立繁峰品 牌的良好形象。公司产品总装实行流水线装配作业，建有功 能齐全的电泵检测实验室，为各类电泵提供了良好的加工条 件和可靠的检测手段。公司工程技术人员精益求精的作风和 销售员的自始自终、友好热情的服务态度，使产品在市场上 受到一致好评。</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<h4>我们的服务</h4>
				<p>
专业化的服务人员主动跟踪服务，免费为客户培训、指导安装，从而确保产品高 效运转，最大程度地降低因客户使用不当而带来不必要的损失。对客户不规范的使用 进行及时纠正，及时维护保养，发生故障时，专业服务人员能迅速地解决问题。</p>
			</div>
			<div class="col-sm-4 hidden-xs">
				<img class="sm-about-image" src="{{ URL::asset('img/about.jpg')}}">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 hidden-xs">
				<img class="sm-about-image" src="{{ URL::asset('img/about.jpg')}}">
			</div>
			<div class="col-sm-8">
				<h4>经营方针</h4>
<p>公司遵循“平等互利、讲究实效、形式多样、共同发展”和“守约、保质、薄利、 重义”的经营方针，以最佳的信誉、合理的价格，热忱欢迎国内外新老客户建立长期友 好的贸易合作关系，共同创造二十一世纪的辉煌。</p>
			</div>
		</div>
		
	</div>
@endsection