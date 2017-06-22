<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>

<?php
require("function.php");
$session=connectBD("root","root");
$i=0;
$sql1="select position_x, position_y
      from data_minute
      where id='1'";
$resultat=mysqli_query($session,$sql1);
while ($linge1=mysqli_fetch_array($resultat))
{
    $id1x[]=$linge1['position_x'];
    $id1y[]=$linge1['position_y'];
    $i++;

}

$sql2="select position_x, position_y
      from data_minute
      where id='2'";
$resultat=mysqli_query($session,$sql2);
while ($linge2=mysqli_fetch_array($resultat))
{
    $id2x[]=$linge2['position_x'];
    $id2y[]=$linge2['position_y'];   
}

$sql3="select position_x, position_y
      from data_minute
      where id='3'";
$resultat=mysqli_query($session,$sql3);
while ($linge3=mysqli_fetch_array($resultat))
{
    $id3x[]=$linge3['position_x'];
    $id3y[]=$linge3['position_y'];   
}

$sql4="select position_x, position_y
      from data_minute
      where id='4'";
$resultat=mysqli_query($session,$sql4);
while ($linge4=mysqli_fetch_array($resultat))
{
    $id4x[]=$linge4['position_x'];
    $id4y[]=$linge4['position_y'];   
}

$sql5="select position_x, position_y
      from data_minute
      where id='5'";
$resultat=mysqli_query($session,$sql5);
while ($linge5=mysqli_fetch_array($resultat))
{
    $id5x[]=$linge5['position_x'];
    $id5y[]=$linge5['position_y'];   
}

$sql6="select position_x, position_y
      from data_minute
      where id='6'";
$resultat=mysqli_query($session,$sql6);
while ($linge6=mysqli_fetch_array($resultat))
{
    $id6x[]=$linge6['position_x'];
    $id6y[]=$linge6['position_y'];   
}

$sql7="select position_x, position_y
      from data_minute
      where id='7'";
$resultat=mysqli_query($session,$sql7);
while ($linge7=mysqli_fetch_array($resultat))
{
    $id7x[]=$linge7['position_x'];
    $id7y[]=$linge7['position_y'];   
}

$sql8="select position_x, position_y
      from data_minute
      where id='8'";
$resultat=mysqli_query($session,$sql8);
while ($linge8=mysqli_fetch_array($resultat))
{
    $id8x[]=$linge8['position_x'];
    $id8y[]=$linge8['position_y'];   
}

$sql9="select position_x, position_y
      from data_minute
      where id='7'";
$resultat=mysqli_query($session,$sql9);
while ($linge9=mysqli_fetch_array($resultat))
{
    $id9x[]=$linge9['position_x'];
    $id9y[]=$linge9['position_y'];   
}

$sql10="select position_x, position_y
      from data_minute
      where id='10'";
$resultat=mysqli_query($session,$sql10);
while ($linge10=mysqli_fetch_array($resultat))
{
    $id10x[]=$linge10['position_x'];
    $id10y[]=$linge10['position_y'];   
}

$sql11="select position_x, position_y
      from data_minute
      where id='7'";
$resultat=mysqli_query($session,$sql11);
while ($linge11=mysqli_fetch_array($resultat))
{
    $id11x[]=$linge11['position_x'];
    $id11y[]=$linge11['position_y'];   
}

$sql12="select position_x, position_y
      from data_minute
      where id='12'";
$resultat=mysqli_query($session,$sql12);
while ($linge12=mysqli_fetch_array($resultat))
{
    $id12x[]=$linge12['position_x'];
    $id12y[]=$linge12['position_y'];   
}

$sql13="select position_x, position_y
      from data_minute
      where id='13'";
$resultat=mysqli_query($session,$sql13);
while ($linge13=mysqli_fetch_array($resultat))
{
    $id13x[]=$linge13['position_x'];
    $id13y[]=$linge13['position_y'];   
}

$sql14="select position_x, position_y
      from data_minute
      where id='14'";
$resultat=mysqli_query($session,$sql14);
while ($linge14=mysqli_fetch_array($resultat))
{
    $id14x[]=$linge14['position_x'];
    $id14y[]=$linge14['position_y'];   
}

$sql15="select position_x, position_y
      from data_minute
      where id='15'";
$resultat=mysqli_query($session,$sql15);
while ($linge15=mysqli_fetch_array($resultat))
{
    $id15x[]=$linge15['position_x'];
    $id15y[]=$linge15['position_y'];   
}

$sql16="select position_x, position_y
      from data_minute
      where id='16'";
$resultat=mysqli_query($session,$sql16);
while ($linge16=mysqli_fetch_array($resultat))
{
    $id16x[]=$linge16['position_x'];
    $id16y[]=$linge16['position_y'];   
}

$sql17="select position_x, position_y
      from data_minute
      where id='17'";
$resultat=mysqli_query($session,$sql17);
while ($linge17=mysqli_fetch_array($resultat))
{
    $id17x[]=$linge17['position_x'];
    $id17y[]=$linge17['position_y'];   
}

$sql18="select position_x, position_y
      from data_minute
      where id='18'";
$resultat=mysqli_query($session,$sql18);
while ($linge18=mysqli_fetch_array($resultat))
{
    $id18x[]=$linge18['position_x'];
    $id18y[]=$linge18['position_y'];   
}

$sql19="select position_x, position_y
      from data_minute
      where id='19'";
$resultat=mysqli_query($session,$sql19);
while ($linge19=mysqli_fetch_array($resultat))
{
    $id19x[]=$linge19['position_x'];
    $id19y[]=$linge19['position_y'];   
}

$sql20="select position_x, position_y
      from data_minute
      where id='20'";
$resultat=mysqli_query($session,$sql20);
while ($linge20=mysqli_fetch_array($resultat))
{
    $id20x[]=$linge20['position_x'];
    $id20y[]=$linge20['position_y'];   
}
?>




    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    
    <div id="main" style="width:800px;height:500px;background-image:url(map_1.jpg);background-repeat:no-repeat"></div>

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
                'echarts/chart/heatmap' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
            


                jsarray1x = <?php echo json_encode($id1x);?>;
                jsarray1y = <?php echo json_encode($id1y);?>;
                jsarray2x = <?php echo json_encode($id2x);?>;
                jsarray2y = <?php echo json_encode($id2y);?>;
                jsarray3x = <?php echo json_encode($id3x);?>;
                jsarray3y = <?php echo json_encode($id3y);?>;
                jsarray4x = <?php echo json_encode($id4x);?>;
                jsarray4y = <?php echo json_encode($id4y);?>;
                jsarray5x = <?php echo json_encode($id5x);?>;
                jsarray5y = <?php echo json_encode($id5y);?>;
                jsarray6x = <?php echo json_encode($id6x);?>;
                jsarray6y = <?php echo json_encode($id6y);?>;
                jsarray7x = <?php echo json_encode($id7x);?>;
                jsarray7y = <?php echo json_encode($id7y);?>;
                jsarray8x = <?php echo json_encode($id8x);?>;
                jsarray8y = <?php echo json_encode($id8y);?>;
                jsarray9x = <?php echo json_encode($id9x);?>;
                jsarray9y = <?php echo json_encode($id9y);?>;
                jsarray10x = <?php echo json_encode($id10x);?>;
                jsarray10y = <?php echo json_encode($id10y);?>;
                jsarray11x = <?php echo json_encode($id11x);?>;
                jsarray11y = <?php echo json_encode($id11y);?>;
                jsarray12x = <?php echo json_encode($id12x);?>;
                jsarray12y = <?php echo json_encode($id12y);?>;
                jsarray13x = <?php echo json_encode($id13x);?>;
                jsarray13y = <?php echo json_encode($id13y);?>;
                jsarray14x = <?php echo json_encode($id14x);?>;
                jsarray14y = <?php echo json_encode($id14y);?>;
                jsarray15x = <?php echo json_encode($id15x);?>;
                jsarray15y = <?php echo json_encode($id15y);?>;
                jsarray16x = <?php echo json_encode($id16x);?>;
                jsarray16y = <?php echo json_encode($id16y);?>;
                jsarray17x = <?php echo json_encode($id17x);?>;
                jsarray17y = <?php echo json_encode($id17y);?>;
                jsarray18x = <?php echo json_encode($id18x);?>;
                jsarray18y = <?php echo json_encode($id18y);?>;
                jsarray19x = <?php echo json_encode($id19x);?>;
                jsarray19y = <?php echo json_encode($id19y);?>;
                jsarray20x = <?php echo json_encode($id20x);?>;
                jsarray20y = <?php echo json_encode($id20y);?>;



                var heatData = [];
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray1x[i]*2.5),
                        (-jsarray1y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray2x[i]*2.5+100),
                        (-jsarray2y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray3x[i]*2.5+100),
                        (-jsarray3y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray4x[i]*2.5+100),
                        (-jsarray4y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray5x[i]*2.5+100),
                        (-jsarray5y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray6x[i]*2.5+100),
                        (-jsarray6y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray7x[i]*2.5+100),
                        (-jsarray7y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray8x[i]*2.5+100),
                        (-jsarray8y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray9x[i]*2.5+100),
                        (-jsarray9y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray10x[i]*2.5+100),
                        (-jsarray10y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray11x[i]*2.5+100),
                        (-jsarray11y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray12x[i]*2.5+100),
                        (-jsarray12y[i]*2+100),
                        0.1
                    ]);
                } 
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray13x[i]*2.5+100),
                        (-jsarray13y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray14x[i]*2.5+100),
                        (-jsarray14y[i]*2+100),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray15x[i]*2.5+100),
                        (-jsarray15y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray16x[i]*2.5+100),
                        (-jsarray16y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray17x[i]*2.5+100),
                        (-jsarray17y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray18x[i]*2.5+100),
                        (-jsarray18y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray19x[i]*2.5+100),
                        (-jsarray19y[i]*2+100),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (-jsarray20x[i]*2.5+100),
                        (-jsarray20y[i]*2+100),
                        0.1
                    ]);
                }
                 
                 

                
                
                var option = {
                    title : {
                        text: 'POSITION'
                    },
                    series : [
                        {
                            type : 'heatmap',
                            data : heatData,
                            hoverable : false,
                            gradientColors: [{
                                offset: 0.4,
                                color: 'green'
                            }, {
                                offset: 0.5,
                                color: 'yellow' 
                            }, {
                                offset: 0.8,
                                color: 'orange'
                            }, {
                                offset: 1,
                                color: 'red'
                            }],
                            blurSize:5,
                            minAlpha: 0.2,
                            valueScale: 2,
                            opacity: 0.6
                        }
    ]
                    
                        
                
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>



