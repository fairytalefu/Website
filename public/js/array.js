
var temp=[],Irr=[],Current= [],Voltage=[],Power=[],time=[];
var dtemp = [],dIrr = [], dcurrent =[], dvoltage = [], dpower = [];
var len = 0;
var day=9;
var num=2010;
var month=9;
var hours=0;
var minutes=0;
var seconds =0;
function getArray()
{
    $.ajax({
        type:'get',
        url:'/getArray',
        data:'',
        success:function(result)
        {

            if (result)
            {
                temp=result.Temp;
                Irr=result.Irr;
                Current=result.Current;
                Voltage=result.Voltage;
                Power=result.Power;
                time=result.time;
                len=1;
                while (len < arr1.length )
                {
                    temp_time=time[len];
                    translate(temp_time);
//                      console.log(num);
//                     alert('kkk');
                    dtemp.push([
                        new Date(num, month, day, hours,minutes,seconds),
                        temp[len],
                        100
                    ]);
                    dIrr.push([
                        new Date(num, month, day, hours,minutes,seconds),
                        Irr[len],
                         100
                    ]);
                    dcurrent.push([new Date(num, month, day, hours,minutes,seconds),
                        Current[len],
                        100]);
                    dvoltage.push([new Date(num, month, day, hours,minutes,seconds),
                        Voltage[len],
                        100]);
                    dpower.push([new Date(num, month, day, hours,minutes,seconds),
                        Power[len],
                        100]);
                    len+=1;
                }

                var  myChart = echarts.init(document.getElementById('Array'));
                option = {
                    title: {
                        text: '折线图堆叠'
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
                    legend: {
                        data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
                    },
                    grid: {
                        left: '3%',
                        right: '4%',
                        bottom: '3%',
                        containLabel: true
                    },
                    toolbox: {
                        feature: {
                            saveAsImage: {}
                        }
                    },
                    xAxis: {
                        type : 'time',
                        splitNumber:10
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [
                        {
                            name:'邮件营销',
                            type:'line',
                            stack: '总量',
                            data:dtemp
                        },
                        {
                            name:'联盟广告',
                            type:'line',
                            stack: '总量',
                            data:dIrr
                        },
                        {
                            name:'视频广告',
                            type:'line',
                            stack: '总量',
                            data:dcurrent
                        },
                        {
                            name:'直接访问',
                            type:'line',
                            stack: '总量',
                            data:dvoltage
                        },
                        {
                            name:'搜索引擎',
                            type:'line',
                            stack: '总量',
                            data:dpower
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



