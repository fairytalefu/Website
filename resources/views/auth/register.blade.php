@extends('layouts.app')

@section('content')
    <style type="text/css">
        #allmap{height:200px;width:350px;border:1px solid;}
    </style>
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">用户注册</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">邮箱</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">确认密码</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('station_id') ? ' has-error' : '' }}">
                            <label for="station_id" class="col-md-4 control-label">光伏电站id</label>

                            <div class="col-md-6">
                                {{--<input id="station_id" type="station_id" class="form-control" name="station_id" value="{{ old('station_id') }}" required>--}}
                                <select  onchange="selectOnchang(this)" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <input id="station_id" type="hidden" class="form-control" name="station_id" value="{{ old('station_id') }}" required>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">手机号码</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="phoneNumber" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}" required>

                                @if($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('GPS') ? ' has-error' : '' }}">

                                <label for="GPS" class="col-md-4 control-label">光伏电站地理位置</label>
                                <strong>经度</strong>
                                <input id="lng" type="text" name="lng" value="">
                                <strong>纬度</strong>
                                <input id="lat" type="text" name="lat" value="">
                                <br>


                            <div class="col-md-4">
                               <div id="allmap"></div>
                            </div>

                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    注册
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
 @section('jscript')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NxtEqaXFSjTVbzfDCF91GYw7qTEeKEuq"></script>
<script type="text/javascript">

    function selectOnchang(obj){
    //获取被选中的option标签选项
        document.getElementById("station_id").value = obj.selectedIndex+1;

    }
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var lng=[],lat=[];
    var point;
    //单击获取点击的经纬度
    map.addEventListener("click",function(e){
        lng=e.point.lng;
        lat=e.point.lat;
        document.getElementById("lng").value = lng;
        document.getElementById("lat").value = lat;
        console.log(lng +" "+lat);
        point = new BMap.Point(lng,lat);
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);              // 将标注添加到地图中
        marker.enableDragging();    //可拖拽
        marker.addEventListener("click", function(e){
            lng=e.point.lng;
            lat=e.point.lat;
            document.getElementById("lng").value = lng;
            document.getElementById("lat").value = lat;
        });
    });


//    map.cleanOverlays();

    map.centerAndZoom('福州', 15);
    map.enableScrollWheelZoom();
//    var opts = {
//        width : 200,     // 信息窗口宽度
//        height: 100,     // 信息窗口高度
//        title : "光伏电站1" , // 信息窗口标题
//        enableMessage:true,//设置允许信息窗发送短息
//        message:"福州大学物理与信息工程学院"
//    }
//    var infoWindow = new BMap.InfoWindow("地址：福州大学物理与信息工程学院", opts);  // 创建信息窗口对象

</script>

@endsection
