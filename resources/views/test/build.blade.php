@extends('layouts.DBT')
@section('content')
    <!-- start: Content -->
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Build</a></li>
        </ul>
        <div class="row-fluid">
            <button class="btn-primary pull-right" >+新建电站</button>
            <div class="span3 statbox blue" onTablet="span6" onDesktop="span3">
                <img src="icon/pv.jpg" width="60px" height="60px" alt="">
                <div class="title">光伏电站{{Auth::user()->station_id}}</div>
                <div class="footer">
                    <a  data-toggle="collapse" data-parent="#accordion"
                        href="#collapseOne"> 查看电站相关信息</a>
                </div>
            </div></div>
        <div id="collapseOne" class="panel panel-primary" style="width: 300px;height: 350px">
            <div class="panel-heading">
                <h3 class="panel-title">光伏电站1</h3>
            </div>
            <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.
            </div>
        </div>
        <br>
        <hr>

    </div><!--/row-->
    <hr>
@section('baiduJs')
    <script src="js/echarts.js"></script>
    <script src="js/temp.js"></script>
    <script src="js/array.js"></script>
    <script src="js/current.js"></script>
    <script src="js/voltage.js"></script>
    <script src="js/power.js"></script>
    <script src="js/Irr.js"></script>
    <script  type="text/javascript">
        getArray();
    </script>
@endsection
@endsection