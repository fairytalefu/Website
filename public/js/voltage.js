
var arr1=[],arr2=[];
var d = [];
var len = 0;
var day=9;
var num=2010;
var month=9;
var hours=0;
var minutes=0;
var seconds =0;
function getVoltage()
{
    $.ajax({
        type:'get',
        url:'/getVoltage',
        data:'',
        success:function(result)
        {

            if (result)
            {
                arr2=result.Voltage;
                arr1=result.time;
                len=1;

                while (len < arr1.length )
                {
                    time=arr1[len];
                    translate(time);
//                      console.log(num);
//                     alert('kkk');
                    d.push([
                        new Date(num, month, day, hours,minutes,seconds),
                        arr2[len],
                        100
                    ]);
                    len+=1;
                }

                var  myChart = echarts.init(document.getElementById('Voltage'));

                option = {
                    title : {
                        text : '阵列电压',
                        subtext : 'dataZoom支持'
                    },
                    tooltip : {
                        trigger: 'item',
                        formatter : function (params) {
                            var date = new Date(params.value[0]);
                            data = date.getFullYear() + '-'
                                + (date.getMonth() + 1) + '-'
                                + date.getDate() + ' '
                                + date.getHours() + ':'
                                + date.getMinutes();
                            return  data + '<br/>'
                                + params.value[1] + ', '
                                + params.value[2];
                        }
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : {show: true},
                            //dataView : {show: true, readOnly: false},
                            dataView : {
                                show : true,
                                title : '数据视图',
                                readOnly: true,
                                lang : ['数据视图', '关闭', '刷新'],
                                optionToContent: function(opt) {
//                   var axisData = opt.xAxis[0].data;
//                    var series1 = opt.series;
                                    var table = '<table style="width:100%;text-align:center"><tbody><tr>'
                                        + '<td>时间</td>'
                                        + '<td>电压</td>'
                                        + '<td>Tag</td>'
                                        + '</tr>';

                                    table += '\n\t'
                                        + "2013.2.2" + '\n\t'
                                        + 100 + '\n\t'
                                        + 100 + '\n\t'
                                    ;

                                    table += '</tbody></table>';
                                    return table;
                                }
                            },
                            restore : {show: true},
                            saveAsImage : {show: true},
                            magicType: {
                                show : true,
                                title : {
                                    line : '动态类型切换-折线图',
                                    bar : '动态类型切换-柱形图'
                                },
                                type : ['line', 'bar']
                            }
                        }
                    },
                    dataZoom: {
                        show: true,
                        start : 70
                    },
                    legend : {
                        data : ['Voltage']
                    },
                    grid: {
                        y2: 80
                    },
                    xAxis : [
                        {
                            type : 'time',
                            splitNumber:10
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name: 'Voltage',
                            type: 'line',
                            showAllSymbol: true,
                            symbolSize: function (value){
                                return Math.round(value[2]/10) + 2;
                            },
                            data:d
                        }
                    ]
                };


                myChart.setOption(option);
            }
        }
    });
}

function  translate(il)
{
    var obj2 = il.split("");
    var date = obj2.slice(0,19);
    num=date[0]*1000+date[1]*100+date[2]*10+parseInt(date[3]);
    month=(date[5]*10+parseInt(date[6]))-1;
    day=(date[8]*10+parseInt(obj2[9]));
    hours=date[11]*10+parseInt(date[12]);
    minutes = date[14]*10+parseInt(date[15]);
    seconds = date[17]*10+parseInt(date[18]);
}