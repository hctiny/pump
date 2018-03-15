@extends('layout.admin_base')

@section('content')
	@parent
	<section class="content">
		<div class="box box-primary">
		  <form method="post" action="">
        <div class="box-body">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="name">名称</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="请输入名称" value="{{$datas->name}}">
          </div>
          <div class="form-group">
            <label for="tel">电话</label>
            <input type="text" name="tel" id="tel" class="form-control" placeholder="请输入电话" value="{{$datas->tel}}">
          </div>
          <div class="form-group">
            <label for="tel">传真</label>
            <input type="text" name="tel" id="tel" class="form-control" placeholder="请输入传真" value="{{$datas->tel}}">
          </div>
          <div class="form-group">
            <label for="mobile">手机</label>
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="请输入手机" value="{{$datas->mobile}}">
          </div>
          <div class="form-group">
            <label for="address">地址</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="请输入地址" value="{{$datas->address}}">
          </div>
          <div class="form-group">
            <label for="address">定位地址</label>
            <input type="hidden" name="lat" id="lat" value="{{$datas->lat}}">
            <input type="hidden" name="lng" id="lng" value="{{$datas->lng}}">
            <div class="map" id="map"></div>
          </div>
          <div class="form-group">
            <label for="address">公司介绍</label>
            <div class="ueditor">
              <script type="text/plain" id="ueditor" name="introduce">
                {!!$datas->introduce!!}
              </script>
            </div>
          </div>
        </div>
        <div class="box-footer">
          @if( $authPowers[$powerTypes['all']['value']] || $authPowers[$powerTypes['edit']['value']])
          <button type="submit" class="btn btn-info pull-right">
            提交
          </button>
          @endif
        </div>
      </form>
    </div>
	</section>
@endsection

@section('script')
@include('UEditor::head')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=I6BcQ2EEqWlqAf01zaQKAPk0GM9W664G"></script>
<script>
  var map = new BMap.Map('map');
  var latValue = lat.value && lat.value > 0 ? lat.value : 39.915;
  var lngValue = lng.value && lng.value > 0 ? lng.value : 116.404;
  var defaultPoint = new BMap.Point(lngValue, latValue);
  map.centerAndZoom(defaultPoint, 20);
  map.enableScrollWheelZoom(true);
  map.addOverlay(new BMap.Marker(defaultPoint));

  var mapGeo = new BMap.Geocoder();
  $('#address').bind('change', function(){
    mapGeo.getPoint(this.value, function(point){
      if(point){
        map.centerAndZoom(point, 20);
        map.addOverlay(new BMap.Marker(point));
      }
    });
  });

  map.addEventListener('click', function(e){
    map.clearOverlays();
    map.addOverlay(new BMap.Marker(e.point));
    lat.value = e.point.lat;
    lng.value = e.point.lng;
  })

  var ue=UE.getEditor("ueditor",{
      allowDivTransToP: false
  });
  ue.ready(function(){
    //因为Laravel有防csrf防伪造攻击的处理所以加上此行
    ue.execCommand('serverparam','_token','{{ csrf_token() }}');
  });
</script>
@endsection