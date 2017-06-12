@extends('layouts.app')
@section('content')
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    @section('jscript')
    <script src="js/echarts.js"></script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
       var myChart = echarts.init(document.getElementById('main'));
        app.title = '气泡图';
        var dataAll = [
            [
                [10.0, 8.04],
                [8.0, 6.95],
                [13.0, 7.58],
                [9.0, 8.81],
                [11.0, 8.33],
                [14.0, 9.96],
                [6.0, 7.24],
                [4.0, 4.26],
                [12.0, 10.84],
                [7.0, 4.82],
                [5.0, 5.68]
            ]
           ];

        var markLineOpt = {
            animation: false,
            label: {
                normal: {
                    formatter: 'y = 0.5 * x + 3',
                    textStyle: {
                        align: 'right'
                    }
                }
            },
            lineStyle: {
                normal: {
                    type: 'solid'
                }
            },
            tooltip: {
                formatter: 'y = 0.5 * x + 3'
            },
            data: [[{
                coord: [0, 3],
                symbol: 'none'
            }, {
                coord: [20, 13],
                symbol: 'none'
            }]]
        };

        option = {
            title: {
                text: 'Anscombe\'s quartet',
                x: 'center',
                y: 0
            },
            grid: [
                {x: '7%', y: '7%', width: '38%', height: '38%'}
            ],
            tooltip: {
                formatter: 'Group {a}: ({c})'
            },
            xAxis: [
                {gridIndex: 0, min: 0, max: 20},
                      ],
            yAxis: [
                {gridIndex: 0, min: 0, max: 15},
                ],
            series: [
                {
                    name: 'I',
                    type: 'scatter',
                    xAxisIndex: 0,
                    yAxisIndex: 0,
                    data: dataAll[0],
                    markLine: markLineOpt
                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    @endsection
@endsection