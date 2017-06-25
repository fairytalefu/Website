@extends('layouts.DBT')
@section('content')
    <!-- start: Content -->
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="../../../resources/views/test/index.blade.php">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Current</a></li>
        </ul>
        <div class="row-fluid">
            <div class="box">
                <div class="box-header">
                    <h2><i class="halflings-icon list-alt"></i><span class="break"></span>光伏面板电流</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="Current" style="width:600px;height:400px;float:left;" ></div>
                </div>
            </div>
        </div>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header">
                    <h2><i class="halflings-icon align-justify"></i><span class="break"></span>光伏阵列电流</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Current</th>
                            <th>created_at</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pvI as $pvi)
                            <tr>
                                <td>{{$pvi->id}}</td>
                                <td class="center">{{$pvi->Current}}</td>
                                <td class="center">{{$pvi->created_at}}</td>
                                <td class="center">
                                    <span class="label label-success">{{$pvi->status_describe}}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-centered">
                        <ul>
                            {{$pvI->links()}}
                        </ul>
                    </div>
                </div>
            </div><!--/span-->
        </div><!--/row-->
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
        getCurrent();
    </script>
@endsection
@endsection