<?php
require('function.php');
$session=connectBD('root','root');
$sql1="select x, y
      from data20062017";
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
   
    
    <div id="main"  style="width:3015px;height:2500px;background: url(arg_mairie_plan_13062017_3.jpg);" ></div>

    	
    
     
    
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
                           
                            type:"line",
                            data:[[455,0],[-455,0]],
                        },
                        {
                           
                            type:"line",
                            data:[[0,380],[0,-380]],
                        },
                        
                        
						{ 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[16]);?>*1.145,<?php echo json_encode($id1y[16]);?>*1.116],[<?php echo json_encode($id1x[17]);?>*1.145,<?php echo json_encode($id1y[17]);?>*1.116]],
							 
                        },
						{ 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[17]);?>*1.145,<?php echo json_encode($id1y[17]);?>*1.116],[<?php echo json_encode($id1x[18]);?>*1.145,<?php echo json_encode($id1y[18]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[18]);?>*1.145,<?php echo json_encode($id1y[18]);?>*1.116],[<?php echo json_encode($id1x[19]);?>*1.145,<?php echo json_encode($id1y[19]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[19]);?>*1.145,<?php echo json_encode($id1y[19]);?>*1.116],[<?php echo json_encode($id1x[20]);?>*1.145,<?php echo json_encode($id1y[20]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[20]);?>*1.145,<?php echo json_encode($id1y[20]);?>*1.116],[<?php echo json_encode($id1x[21]);?>*1.145,<?php echo json_encode($id1y[21]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[21]);?>*1.145,<?php echo json_encode($id1y[21]);?>*1.116],[<?php echo json_encode($id1x[22]);?>*1.145,<?php echo json_encode($id1y[22]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[22]);?>*1.145,<?php echo json_encode($id1y[22]);?>*1.116],[<?php echo json_encode($id1x[23]);?>*1.145,<?php echo json_encode($id1y[23]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[23]);?>*1.145,<?php echo json_encode($id1y[23]);?>*1.116],[<?php echo json_encode($id1x[24]);?>*1.145,<?php echo json_encode($id1y[24]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[24]);?>*1.145,<?php echo json_encode($id1y[24]);?>*1.116],[<?php echo json_encode($id1x[25]);?>*1.145,<?php echo json_encode($id1y[25]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[25]);?>*1.145,<?php echo json_encode($id1y[25]);?>*1.116],[<?php echo json_encode($id1x[26]);?>*1.145,<?php echo json_encode($id1y[26]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[26]);?>*1.145,<?php echo json_encode($id1y[26]);?>*1.116],[<?php echo json_encode($id1x[27]);?>*1.145,<?php echo json_encode($id1y[27]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[27]);?>*1.145,<?php echo json_encode($id1y[27]);?>*1.116],[<?php echo json_encode($id1x[28]);?>*1.145,<?php echo json_encode($id1y[28]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[28]);?>*1.145,<?php echo json_encode($id1y[28]);?>*1.116],[<?php echo json_encode($id1x[29]);?>*1.145,<?php echo json_encode($id1y[29]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[29]);?>*1.145,<?php echo json_encode($id1y[29]);?>*1.116],[<?php echo json_encode($id1x[30]);?>*1.145,<?php echo json_encode($id1y[30]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[30]);?>*1.145,<?php echo json_encode($id1y[30]);?>*1.116],[<?php echo json_encode($id1x[31]);?>*1.145,<?php echo json_encode($id1y[31]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[31]);?>*1.145,<?php echo json_encode($id1y[31]);?>*1.116],[<?php echo json_encode($id1x[32]);?>*1.145,<?php echo json_encode($id1y[32]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[32]);?>*1.145,<?php echo json_encode($id1y[32]);?>*1.116],[<?php echo json_encode($id1x[33]);?>*1.145,<?php echo json_encode($id1y[33]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[33]);?>*1.145,<?php echo json_encode($id1y[33]);?>*1.116],[<?php echo json_encode($id1x[34]);?>*1.145,<?php echo json_encode($id1y[34]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[34]);?>*1.145,<?php echo json_encode($id1y[34]);?>*1.116],[<?php echo json_encode($id1x[35]);?>*1.145,<?php echo json_encode($id1y[35]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[35]);?>*1.145,<?php echo json_encode($id1y[35]);?>*1.116],[<?php echo json_encode($id1x[36]);?>*1.145,<?php echo json_encode($id1y[36]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[36]);?>*1.145,<?php echo json_encode($id1y[36]);?>*1.116],[<?php echo json_encode($id1x[37]);?>*1.145,<?php echo json_encode($id1y[37]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[37]);?>*1.145,<?php echo json_encode($id1y[37]);?>*1.116],[<?php echo json_encode($id1x[38]);?>*1.145,<?php echo json_encode($id1y[38]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[38]);?>*1.145,<?php echo json_encode($id1y[38]);?>*1.116],[<?php echo json_encode($id1x[39]);?>*1.145,<?php echo json_encode($id1y[39]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[39]);?>*1.145,<?php echo json_encode($id1y[39]);?>*1.116],[<?php echo json_encode($id1x[40]);?>*1.145,<?php echo json_encode($id1y[40]);?>*1.116]],
							 
                        },
                            { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[40]);?>*1.145,<?php echo json_encode($id1y[40]);?>*1.116],[<?php echo json_encode($id1x[41]);?>*1.145,<?php echo json_encode($id1y[41]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[41]);?>*1.145,<?php echo json_encode($id1y[41]);?>*1.116],[<?php echo json_encode($id1x[42]);?>*1.145,<?php echo json_encode($id1y[42]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[42]);?>*1.145,<?php echo json_encode($id1y[42]);?>*1.116],[<?php echo json_encode($id1x[43]);?>*1.145,<?php echo json_encode($id1y[43]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[43]);?>*1.145,<?php echo json_encode($id1y[43]);?>*1.116],[<?php echo json_encode($id1x[44]);?>*1.145,<?php echo json_encode($id1y[44]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[44]);?>*1.145,<?php echo json_encode($id1y[44]);?>*1.116],[<?php echo json_encode($id1x[45]);?>*1.145,<?php echo json_encode($id1y[45]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[45]);?>*1.145,<?php echo json_encode($id1y[45]);?>*1.116],[<?php echo json_encode($id1x[46]);?>*1.145,<?php echo json_encode($id1y[46]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[46]);?>*1.145,<?php echo json_encode($id1y[46]);?>*1.116],[<?php echo json_encode($id1x[47]);?>*1.145,<?php echo json_encode($id1y[47]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[47]);?>*1.145,<?php echo json_encode($id1y[47]);?>*1.116],[<?php echo json_encode($id1x[48]);?>*1.145,<?php echo json_encode($id1y[48]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[48]);?>*1.145,<?php echo json_encode($id1y[48]);?>*1.116],[<?php echo json_encode($id1x[49]);?>*1.145,<?php echo json_encode($id1y[49]);?>*1.116]],
							 
                        },
                        { 
							itemStyle: {
								normal: {
									color: 'red',
									lineStyle: {        // 系列级个性化折线样式
										width: 	20,
									}
								},
							},
                            type:"line",
							data:[[<?php echo json_encode($id1x[49]);?>*1.145,<?php echo json_encode($id1y[49]);?>*1.116],[<?php echo json_encode($id1x[50]);?>*1.145,<?php echo json_encode($id1y[50]);?>*1.116]],
							 
                        },

						
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>