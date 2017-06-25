@extends('layouts.DBT')
@section('content')
    <!-- start: Content -->
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">PVArray</a></li>
        </ul>
        <div class="row-fluid">
            <div class="box">
                <div class="box-header">
                    <h2><i class="halflings-icon list-alt"></i><span class="break"></span>光伏阵列</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="Array" style="width:600px;height:400px;float:left;" ></div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <a href="{{route('deleteAll')}}" class="btn btn-danger">删除全部</a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            导入数据
        </button>
        <a href="{{route('getExport')}}" class="btn btn-success">导出数据</a>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">导入光伏数据</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('importData')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="file" name="pvarray">
                            <input type="submit" value="导入">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <butImpton type="button" class="btn btn-default" data-dismiss="modal">关闭</butImpton>
                        <button type="button" class="btn btn-primary">返回</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>光伏阵列参数</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>station_id</th>
                            <th>Temp(°C)</th>
                            <th>Irr(W/㎡)</th>
                            <th>Current(A)</th>
                            <th>Voltage(V)</th>
                            <th>Power(W)</th>
                            <th>Status</th>
                            <th>created_at</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pvarray as $pv)
                            <tr>
                                <td>{{$pv->id}}  </td>
                                <td>{{$pv->station_id}}  </td>
                                <td class="center"><span class="label label-info">{{$pv->Temp}}</span></td>
                                <td class="center"><span class="label label-info">{{$pv->Irr}}</span></td>
                                <td class="center"><span class="label label-primary">{{$pv->Current}}</span></td>
                                <td class="center"><span class="label label-primary">{{$pv->Voltage}}</span></td>
                                <td class="center"><span class="label label-primary">{{$pv->Power}}</span></td>
                                <td class="center">
                                    <span class="label label-success">{{$pv->status_describe}}</span>
                                </td>

                                <td class="center">{{$pv->created_at}}</td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-centered">
                        <ul>
                            {{ $pvarray->links() }}
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
          getArray();
    </script>
@endsection
@endsection