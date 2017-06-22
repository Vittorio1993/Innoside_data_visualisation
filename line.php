<?php
require('function.php');
$session=connectBD('root','root');
$sql1="select position_x, position_y
      from data
      where id='1'";
$resultat=mysqli_query($session,$sql1);
$i=0;
while($linge1=mysqli_fetch_array($resultat))
{
    $id1x[]=$linge1['position_x'];
    $id1y[]=$linge1['position_y'];
    $count[]=$i;
    $i++;
}

$sql2="select position_x, position_y
      from data
      where id='2'";
$resultat=mysqli_query($session,$sql2);
while($linge2=mysqli_fetch_array($resultat))
{
    $id2x[]=$linge2['position_x'];
    $id2y[]=$linge2['position_y'];
}

$sql3="select position_x, position_y
      from data
      where id='3'";
$resultat=mysqli_query($session,$sql3);
while($linge3=mysqli_fetch_array($resultat))
{
    $id3x[]=$linge3['position_x'];
    $id3y[]=$linge3['position_y'];
}

$sql4="select position_x, position_y
      from data
      where id='4'";
$resultat=mysqli_query($session,$sql4);
while($linge4=mysqli_fetch_array($resultat))
{
    $id4x[]=$linge4['position_x'];
    $id4y[]=$linge4['position_y'];
}

$sql5="select position_x, position_y
      from data
      where id='5'";
$resultat=mysqli_query($session,$sql5);
while($linge5=mysqli_fetch_array($resultat))
{
    $id5x[]=$linge5['position_x'];
    $id5y[]=$linge5['position_y'];
}

$sql6="select position_x, position_y
      from data
      where id='6'";
$resultat=mysqli_query($session,$sql6);
while($linge6=mysqli_fetch_array($resultat))
{
    $id6x[]=$linge6['position_x'];
    $id6y[]=$linge6['position_y'];
}

$sql7="select position_x, position_y
      from data
      where id='7'";
$resultat=mysqli_query($session,$sql7);
while($linge7=mysqli_fetch_array($resultat))
{
    $id7x[]=$linge7['position_x'];
    $id7y[]=$linge7['position_y'];
}

$sql8="select position_x, position_y
      from data
      where id='8'";
$resultat=mysqli_query($session,$sql8);
while($linge8=mysqli_fetch_array($resultat))
{
    $id8x[]=$linge8['position_x'];
    $id8y[]=$linge8['position_y'];
}

$sql9="select position_x, position_y
      from data
      where id='9'";
$resultat=mysqli_query($session,$sql9);
while($linge9=mysqli_fetch_array($resultat))
{
    $id9x[]=$linge9['position_x'];
    $id9y[]=$linge9['position_y'];
}

$sql10="select position_x, position_y
      from data
      where id='10'";
$resultat=mysqli_query($session,$sql10);
while($linge10=mysqli_fetch_array($resultat))
{
    $id10x[]=$linge10['position_x'];
    $id10y[]=$linge10['position_y'];
}

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="height:400px"></div>
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
                    legend: {
                        data:['position1_x','position1_y','position2_x','position2_y','position3_x','position3_y','position4_x','position4_y','position5_x','position5_y','position6_x','position6_y','position7_x','position7_y','position8_x','position8_y','position9_x','position9_y','position10_x','position10_y']

                    },
                    xAxis : [
                        {
                            type : 'category',
                            data : <?php echo json_encode($count);?>
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            "name":"position1_x",
                            "type":"line",
                            "data":<?php echo json_encode($id1x);?>
                        },
                        {
                            "name":"position1_y",
                            "type":"line",
                            "data":<?php echo json_encode($id1y);?>
                        },
                        {
                            "name":"position2_x",
                            "type":"line",
                            "data":<?php echo json_encode($id2x);?>
                        },
                        {
                            "name":"position2_y",
                            "type":"line",
                            "data":<?php echo json_encode($id2y);?>
                        },
                        {
                            "name":"position3_x",
                            "type":"line",
                            "data":<?php echo json_encode($id3x);?>
                        },
                        {
                            "name":"position3_y",
                            "type":"line",
                            "data":<?php echo json_encode($id3y);?>
                        },
                        {
                            "name":"position4_x",
                            "type":"line",
                            "data":<?php echo json_encode($id4x);?>
                        },
                        {
                            "name":"position4_y",
                            "type":"line",
                            "data":<?php echo json_encode($id4y);?>
                        },
                        {
                            "name":"position5_x",
                            "type":"line",
                            "data":<?php echo json_encode($id5x);?>
                        },
                        {
                            "name":"position5_y",
                            "type":"line",
                            "data":<?php echo json_encode($id5y);?>
                        },
                        {
                            "name":"position6_x",
                            "type":"line",
                            "data":<?php echo json_encode($id6x);?>
                        },
                        {
                            "name":"position6_y",
                            "type":"line",
                            "data":<?php echo json_encode($id6y);?>
                        },
                        {
                            "name":"position7_x",
                            "type":"line",
                            "data":<?php echo json_encode($id7x);?>
                        },
                        {
                            "name":"position7_y",
                            "type":"line",
                            "data":<?php echo json_encode($id8y);?>
                        },
                        {
                            "name":"position8_x",
                            "type":"line",
                            "data":<?php echo json_encode($id9x);?>
                        },
                        {
                            "name":"position8_y",
                            "type":"line",
                            "data":<?php echo json_encode($id3y);?>
                        },
                        {
                            "name":"position9_x",
                            "type":"line",
                            "data":<?php echo json_encode($id3x);?>
                        },
                        {
                            "name":"position9_y",
                            "type":"line",
                            "data":<?php echo json_encode($id3y);?>
                        },
                        {
                            "name":"position10_x",
                            "type":"line",
                            "data":<?php echo json_encode($id3x);?>
                        },
                        {
                            "name":"position10_y",
                            "type":"line",
                            "data":<?php echo json_encode($id3y);?>
                        },
                        
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>