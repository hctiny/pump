<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>台州仨民机电有限公司</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/front.css')}}">
  
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <span class="navbar-brand-name">台州仨民机电有限公司</span><small>&nbsp;水泵制造者</small>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">首页</a></li>
        <li><a href="#">产品中心</a></li>
        <li><a href="#">关于我们</a></li>
        <li><a href="#">联系我们</a></li>
      </ul>
    </div>
    </div>
  </nav>
  @yield('content')
  <footer class="sm-footer well">
    <div class="container">
      <div class="sm-footer-item">
        <h4>关于我们</h4>
        <p>巴拉巴拉</p>
      </div>
      <div class="sm-footer-item">
        <h4>联系我们</h4>
        <p>电话：0576-86352800</p>
        <p>地址：浙江省台州市温岭市山市东大街xxx号</p>
      </div>
      <div class="sm-footer-item">
        <h4>关注我们</h4>
        <p>
          <img src="{{ URL::asset('img/1520565864.png')}}" />
        </p>
      </div>
    </div>
    <div class="sm-copyright">
      <strong>Copyright &copy; 2014-2018 台州仨民机电有限公司</strong><br />
      技术支持 <a>杭州派兹坊网络科技有限公司</a><br />
      浙备
    </div>
  </footer>
<!-- ./wrapper -->
<script src="{{ URL::asset('js/app.js')}}"></script>
<script src="{{ URL::asset('js/front.js')}}"></script>
@yield('customJs')
</body>
</html>
