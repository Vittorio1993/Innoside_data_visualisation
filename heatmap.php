<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Heatmap</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta charset="utf-8">
</head>
<body>
	
    <div class="heatmap" id="heatmap"></div>
	<h2 style="text-align:center">Heatmap position</h2>
	<br>
	<br>
	
	
	
	<style>
        div#heatmap {
            width:1250px; height:400px;border: 1px solid;border-color: grey;
        }
	</style>
</body>

<?php
require("function.php");
$session=connectBD("root","root");
$i=0;
$sql1="select position_x, position_y
      from data
      where id='1'";
$resultat=mysqli_query($session,$sql1);
while ($linge1=mysqli_fetch_array($resultat))
{
	$id1x[]=$linge1['position_x'];
	$i++;

}

$sql2="select position_x, position_y
      from data
      where id='2'";
$resultat=mysqli_query($session,$sql1);
while ($linge2=mysqli_fetch_array($resultat))
{
	$id1x[]=$linge2['position_x'];
	

}
$sql3="select position_x, position_y
      from data
      where id='3'";
$resultat=mysqli_query($session,$sql1);
while ($linge3=mysqli_fetch_array($resultat))
{
	$id1x[]=$linge3['position_x'];
	

}
print_r($id1x);
?>


 

<script src="heatmap.js"></script>
<script type="text/javascript">
var objmale =eval('<?php echo json_encode($id1x);?>');

var heatmapInstance = h337.create({
    container: document.querySelector('#heatmap'),
});
var points = [];
var max = 0;
var width = 1200;
var height = 400;
var len = 0;

while (len<<?php echo $i?>) {
    var val =objmale[len] ;
    max = Math.max(max, val);
    var point = {
        x: len/2,
        y: (1/objmale[len]),
        value: val
    };
    points.push(point);
	len++;
}

var data = {
    max: max,
    data: points
};
while (len<<?php echo $i?>) {
    var val =objmale[len] ;
    max = Math.max(max, val);
    var point = {
        x: len/2,
        y: (1/objmale[len]),
        value: val
    };
    points.push(point);
	len++;
}

var data1 = {
    max: max,
    data: points
};

heatmapInstance.setData(data); 







</script>
</html>