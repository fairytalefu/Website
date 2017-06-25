@extends('layouts.DBT')

@section('content')
			<!-- start: Content -->
			<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="{{route('dashboard')}}">Dashboard</a>
						<i class="icon-angle-right"></i>
					</li>
					{{--<li><a href="{{route('dashboard')}}">Dashboard</a></li>--}}
				</ul>

				<div class="row-fluid">

					<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
						<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
						<div class="number">{{$aData->Temp}}<i class="icon-arrow-up"></i></div>
						<div class="title">温度</div>
						<div class="footer">
							<a href="#"> 查看全部</a>
						</div>
					</div>
					<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
						<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
						<div class="number">{{$aData->Irr}}<i @if($aData[3] > $aData[3])class="icon-arrow-up"@else class="icon-arrow-down" @endif></i></div>
						<div class="title">光照度</div>
						<div class="footer">
							<a href="#"> 查看全部</a>
						</div>
					</div>
					<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
						<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
						<div class="number">{{$aData->Voltage}}<i class="icon-arrow-up"></i></div>
						<div class="title">电压</div>
						<div class="footer">
							<a href="#"> 查看全部</a>
						</div>
					</div>
					<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
						<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
						<div class="number">{{$aData->Current}}<i class="icon-arrow-down"></i></div>
						<div class="title">电流</div>
						<div class="footer">
							<a href="#"> 查看全部</a>
						</div>
					</div>

				</div>
				<div class="row-fluid">

					<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
						<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
						<div class="number">{{$aData->Power}}<i class="icon-arrow-up"></i></div>
						<div class="title">功率</div>
						<div class="footer">
							<a href="#"> 查看全部</a>
						</div>
					</div>
					<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
						<div class="title">经度</div>
						<div class="number" >
							{{Auth::user()->Lng}}
							<input id="lng"  type="hidden" value="{{Auth::user()->Lng}}">
						</div>
					</div>
					<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
						<div class="title">纬度</div>
						<div class="number" >
							{{Auth::user()->Lat}}
							<input id="lat"  type="hidden" value="{{Auth::user()->Lat}}">
						</div>

					</div>
					<div class="span3 statbox red noMargin" onTablet="span6" onDesktop="span3">
						<div class="title">工作状态</div>
						<div class="number" >
							Open
						</div>

					</div>

				</div>
				<div class="row-fluid">

					<div class="span12 widget blue" onTablet="span12" onDesktop="span12">

						{{--<div id="stats-chart2"  style="height:282px" ></div>--}}
						<div id="allmap"></div>

					</div>

				</div>

				<div class="row-fluid hideInIE8 circleStats">

					<div class="span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItemBox yellow">
							<div class="header">Disk Space Usage</div>
							<span class="percent">percent</span>
							<div class="circleStat">
								<input type="text" value="{{$deviceStatus->disk_space_usage}}" class="whiteCircle" />
							</div>
							<div class="footer">
							<span class="count">
								<span class="number">20000</span>
								<span class="unit">MB</span>
							</span>
								<span class="sep"> / </span>
								<span class="value">
								<span class="number">50000</span>
								<span class="unit">MB</span>
							</span>
							</div>
						</div>
					</div>

					<div class="span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItemBox green">
							<div class="header">Bandwidth</div>
							<span class="percent">percent</span>
							<div class="circleStat">
								<input type="text" value="78" class="whiteCircle" />
							</div>
							<div class="footer">
							<span class="count">
								<span class="number">5000</span>
								<span class="unit">GB</span>
							</span>
								<span class="sep"> / </span>
								<span class="value">
								<span class="number">5000</span>
								<span class="unit">GB</span>
							</span>
							</div>
						</div>
					</div>

					<div class="span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItemBox greenDark">
							<div class="header">Memory</div>
							<span class="percent">percent</span>
							<div class="circleStat">
								<input type="text" value="{{$deviceStatus->memory_usage}}" class="whiteCircle" />
							</div>
							<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
								<span class="sep"> / </span>
								<span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
							</div>
						</div>
					</div>

					<div class="span2 noMargin" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItemBox pink">
							<div class="header">CPU</div>
							<span class="percent">percent</span>
							<div class="circleStat">
								<input type="text" value="{{$deviceStatus->cpu_usage}}" class="whiteCircle" />
							</div>
							<div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GHz</span>
							</span>
								<span class="sep"> / </span>
								<span class="value">
								<span class="number">3.2</span>
								<span class="unit">GHz</span>
							</span>
							</div>
						</div>
					</div>

				</div>

			</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->
	@section('baiduJs')
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NxtEqaXFSjTVbzfDCF91GYw7qTEeKEuq"></script>
		<script type="text/javascript">
            // 百度地图API功能
            lng =  document.getElementById("lng").value;
            console.log(lng);
            lat =  document.getElementById("lat").value;
            var map = new BMap.Map("allmap");
            var point = new BMap.Point(lng,lat);
            var marker = new BMap.Marker(point);  // 创建标注
            map.addOverlay(marker);              // 将标注添加到地图中
            map.centerAndZoom(point, 15);
            map.enableScrollWheelZoom();
            var opts = {
                width : 200,     // 信息窗口宽度
                height: 100,     // 信息窗口高度
                title : "光伏电站1" , // 信息窗口标题
                enableMessage:true,//设置允许信息窗发送短息
                message:"光伏阵列：6x3"
            }
            var infoWindow = new BMap.InfoWindow("地址：福州大学物理与信息工程学院", opts);  // 创建信息窗口对象
            marker.addEventListener("click", function(){
                map.openInfoWindow(infoWindow,point); //开启信息窗口
            });
    	</script>
		@endsection
@endsection