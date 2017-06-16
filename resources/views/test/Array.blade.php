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
                    <div style="float:right;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Array</th>
                                <th>created_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pvarray as $pvt)
                                <tr>
                                    <td class="center">{{$pvt->id}}</td>
                                    <td class="center">{{$pvt->Temp}}</td>
                                    <td class="center">{{$pvt->created_at}}</td>
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
                </div>
            </div>
        </div>
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