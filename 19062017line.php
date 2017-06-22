<?php
require('function.php');
$session=connectBD('root','root');
$sql1="select x, y
      from data18062017
      where id='1'";
$resultat=mysqli_query($session,$sql1);
$i=0;
while($linge1=mysqli_fetch_array($resultat))
{
    $id1x[]=$linge1['x'];
    $id1y[]=$linge1['y'];
    $count[]=$i;
    $i++;
}


?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
     <div id="main" style="width:603px;height:500px;background-image:url(arg_mairie_plan_19062017.jpg);background-repeat:no-repeat""></div>
    
    <!-- ECharts单文件引入 -->
    <script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
    <script type="text/javascript">
        // 路径配置
        require.config({
            paths: {
                echarts: 'http://echarts.baidu.com/build/dist'
            }
        });
        
        // 使用
        require(
            [
                'echarts',
                'echarts/chart/line' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
                
                var option = {
                    tooltip: {
                        show: true
                    },
                    
                    xAxis : [

                        {
                            axisTick: {
                                show: false
                            },
                            type : 'value',
                          
                            
                        }
                    ],
                    yAxis : [
                        {
                            axisTick: {
                                show: false
                            },
                            type : 'value'
                     
                        }
                    ],
                    series : [
                         {
                           
                            "type":"line",
                            "data":[[455,0],[-455,0]],
                        },
                        {
                           
                            "type":"line",
                            "data":[[0,380],[0,-380]],
                        },
                          
						{
                           
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[1]);?>,<?php echo json_encode($id1y[1]);?>],[<?php echo json_encode($id1x[2]);?>,<?php echo json_encode($id1y[2]);?>]],
						},	  
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[2]);?>,<?php echo json_encode($id1y[2]);?>],[<?php echo json_encode($id1x[3]);?>,<?php echo json_encode($id1y[3]);?>]],
                        }, 
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[3]);?>,<?php echo json_encode($id1y[3]);?>],[<?php echo json_encode($id1x[4]);?>,<?php echo json_encode($id1y[4]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[4]);?>,<?php echo json_encode($id1y[4]);?>],[<?php echo json_encode($id1x[5]);?>,<?php echo json_encode($id1y[5]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[5]);?>,<?php echo json_encode($id1y[5]);?>],[<?php echo json_encode($id1x[6]);?>,<?php echo json_encode($id1y[6]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[6]);?>,<?php echo json_encode($id1y[6]);?>],[<?php echo json_encode($id1x[7]);?>,<?php echo json_encode($id1y[7]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[7]);?>,<?php echo json_encode($id1y[7]);?>],[<?php echo json_encode($id1x[8]);?>,<?php echo json_encode($id1y[8]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[8]);?>,<?php echo json_encode($id1y[8]);?>],[<?php echo json_encode($id1x[9]);?>,<?php echo json_encode($id1y[9]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[9]);?>,<?php echo json_encode($id1y[9]);?>],[<?php echo json_encode($id1x[10]);?>,<?php echo json_encode($id1y[10]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[10]);?>,<?php echo json_encode($id1y[10]);?>],[<?php echo json_encode($id1x[11]);?>,<?php echo json_encode($id1y[11]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[11]);?>,<?php echo json_encode($id1y[11]);?>],[<?php echo json_encode($id1x[12]);?>,<?php echo json_encode($id1y[12]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[12]);?>,<?php echo json_encode($id1y[12]);?>],[<?php echo json_encode($id1x[13]);?>,<?php echo json_encode($id1y[13]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[13]);?>,<?php echo json_encode($id1y[13]);?>],[<?php echo json_encode($id1x[14]);?>,<?php echo json_encode($id1y[14]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[14]);?>,<?php echo json_encode($id1y[14]);?>],[<?php echo json_encode($id1x[15]);?>,<?php echo json_encode($id1y[15]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[15]);?>,<?php echo json_encode($id1y[15]);?>],[<?php echo json_encode($id1x[16]);?>,<?php echo json_encode($id1y[16]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[16]);?>,<?php echo json_encode($id1y[16]);?>],[<?php echo json_encode($id1x[17]);?>,<?php echo json_encode($id1y[17]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[17]);?>,<?php echo json_encode($id1y[17]);?>],[<?php echo json_encode($id1x[18]);?>,<?php echo json_encode($id1y[18]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[18]);?>,<?php echo json_encode($id1y[18]);?>],[<?php echo json_encode($id1x[19]);?>,<?php echo json_encode($id1y[19]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[19]);?>,<?php echo json_encode($id1y[19]);?>],[<?php echo json_encode($id1x[20]);?>,<?php echo json_encode($id1y[20]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[20]);?>,<?php echo json_encode($id1y[20]);?>],[<?php echo json_encode($id1x[21]);?>,<?php echo json_encode($id1y[21]);?>]],
                        },
						{
                           
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[21]);?>,<?php echo json_encode($id1y[21]);?>],[<?php echo json_encode($id1x[22]);?>,<?php echo json_encode($id1y[22]);?>]],
						 },  
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[22]);?>,<?php echo json_encode($id1y[22]);?>],[<?php echo json_encode($id1x[23]);?>,<?php echo json_encode($id1y[23]);?>]],
                        }, 
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[23]);?>,<?php echo json_encode($id1y[23]);?>],[<?php echo json_encode($id1x[24]);?>,<?php echo json_encode($id1y[24]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[24]);?>,<?php echo json_encode($id1y[24]);?>],[<?php echo json_encode($id1x[25]);?>,<?php echo json_encode($id1y[25]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[25]);?>,<?php echo json_encode($id1y[25]);?>],[<?php echo json_encode($id1x[26]);?>,<?php echo json_encode($id1y[26]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[26]);?>,<?php echo json_encode($id1y[26]);?>],[<?php echo json_encode($id1x[27]);?>,<?php echo json_encode($id1y[27]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[27]);?>,<?php echo json_encode($id1y[27]);?>],[<?php echo json_encode($id1x[28]);?>,<?php echo json_encode($id1y[28]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[28]);?>,<?php echo json_encode($id1y[28]);?>],[<?php echo json_encode($id1x[29]);?>,<?php echo json_encode($id1y[29]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[29]);?>,<?php echo json_encode($id1y[29]);?>],[<?php echo json_encode($id1x[30]);?>,<?php echo json_encode($id1y[30]);?>]],
                        },
						{
                            
                            "type":"line",
							"data":[[<?php echo json_encode($id1x[30]);?>,<?php echo json_encode($id1y[30]);?>],[<?php echo json_encode($id1x[31]);?>,<?php echo json_encode($id1y[31]);?>]],
                        },
						
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>