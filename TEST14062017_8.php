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
$sql="select x, y
      from data13062017
      where id='1'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id1x[]=$linge['x'];
    $id1y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='2'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id2x[]=$linge['x'];
    $id2y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='3'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id3x[]=$linge['x'];
    $id3y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='4'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id4x[]=$linge['x'];
    $id4y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='5'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id5x[]=$linge['x'];
    $id5y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='6'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id6x[]=$linge['x'];
    $id6y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='7'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id7x[]=$linge['x'];
    $id7y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='8'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id8x[]=$linge['x'];
    $id8y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='9'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id9x[]=$linge['x'];
    $id9y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='10'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id10x[]=$linge['x'];
    $id10y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='11'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id11x[]=$linge['x'];
    $id11y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='12'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id12x[]=$linge['x'];
    $id12y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='13'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id13x[]=$linge['x'];
    $id13y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='14'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id14x[]=$linge['x'];
    $id14y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='15'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id15x[]=$linge['x'];
    $id15y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='16'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id16x[]=$linge['x'];
    $id16y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='17'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id17x[]=$linge['x'];
    $id17y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='18'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id18x[]=$linge['x'];
    $id18y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='19'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id19x[]=$linge['x'];
    $id19y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='20'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id20x[]=$linge['x'];
    $id20y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='21'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id21x[]=$linge['x'];
    $id21y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='22'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id22x[]=$linge['x'];
    $id22y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='23'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id23x[]=$linge['x'];
    $id23y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='24'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id24x[]=$linge['x'];
    $id24y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='25'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id25x[]=$linge['x'];
    $id25y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='26'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id26x[]=$linge['x'];
    $id26y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='27'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id27x[]=$linge['x'];
    $id27y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='28'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id28x[]=$linge['x'];
    $id28y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='29'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id29x[]=$linge['x'];
    $id29y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='30'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id30x[]=$linge['x'];
    $id30y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='31'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id31x[]=$linge['x'];
    $id31y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='32'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id32x[]=$linge['x'];
    $id32y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='33'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id33x[]=$linge['x'];
    $id33y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='34'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id34x[]=$linge['x'];
    $id34y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='35'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id35x[]=$linge['x'];
    $id35y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='36'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id36x[]=$linge['x'];
    $id36y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='37'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id37x[]=$linge['x'];
    $id37y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='38'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id38x[]=$linge['x'];
    $id38y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='39'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id39x[]=$linge['x'];
    $id39y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='40'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id40x[]=$linge['x'];
    $id40y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='41'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id41x[]=$linge['x'];
    $id41y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='42'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id42x[]=$linge['x'];
    $id42y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='43'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id43x[]=$linge['x'];
    $id43y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='44'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id44x[]=$linge['x'];
    $id44y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='45'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id45x[]=$linge['x'];
    $id45y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='46'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id46x[]=$linge['x'];
    $id46y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='47'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id47x[]=$linge['x'];
    $id47y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='48'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id48x[]=$linge['x'];
    $id48y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='49'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id49x[]=$linge['x'];
    $id49y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='50'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id50x[]=$linge['x'];
    $id50y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='51'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id51x[]=$linge['x'];
    $id51y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='52'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id52x[]=$linge['x'];
    $id52y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='53'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id53x[]=$linge['x'];
    $id53y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='54'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id54x[]=$linge['x'];
    $id54y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='55'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id55x[]=$linge['x'];
    $id55y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='56'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id56x[]=$linge['x'];
    $id56y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='57'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id57x[]=$linge['x'];
    $id57y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='58'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id58x[]=$linge['x'];
    $id58y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='59'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id59x[]=$linge['x'];
    $id59y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='60'";
      $resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id60x[]=$linge['x'];
    $id60y[]=$linge['y'];
    $i++;

}
$sql="select x, y
      from data13062017
      where id='61'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id61x[]=$linge['x'];
    $id61y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='62'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id62x[]=$linge['x'];
    $id62y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='63'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id63x[]=$linge['x'];
    $id63y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='64'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id64x[]=$linge['x'];
    $id64y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='65'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id65x[]=$linge['x'];
    $id65y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='66'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id66x[]=$linge['x'];
    $id66y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='67'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id67x[]=$linge['x'];
    $id67y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='68'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id68x[]=$linge['x'];
    $id68y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='69'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id69x[]=$linge['x'];
    $id69y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='70'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id70x[]=$linge['x'];
    $id70y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='71'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id71x[]=$linge['x'];
    $id71y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='72'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id72x[]=$linge['x'];
    $id72y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='73'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id73x[]=$linge['x'];
    $id73y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='74'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id74x[]=$linge['x'];
    $id74y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='75'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id75x[]=$linge['x'];
    $id75y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='76'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id76x[]=$linge['x'];
    $id76y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='77'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id77x[]=$linge['x'];
    $id77y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='78'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id78x[]=$linge['x'];
    $id78y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='79'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id79x[]=$linge['x'];
    $id79y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='80'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id80x[]=$linge['x'];
    $id80y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='81'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id81x[]=$linge['x'];
    $id81y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='82'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id82x[]=$linge['x'];
    $id82y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='83'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id83x[]=$linge['x'];
    $id83y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='84'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id84x[]=$linge['x'];
    $id84y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='85'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id85x[]=$linge['x'];
    $id85y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='86'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id86x[]=$linge['x'];
    $id86y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='87'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id87x[]=$linge['x'];
    $id87y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='88'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id88x[]=$linge['x'];
    $id88y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='89'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id89x[]=$linge['x'];
    $id89y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='90'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id90x[]=$linge['x'];
    $id90y[]=$linge['y'];   
}
$sql="select x, y
      from data13062017
      where id='91'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id91x[]=$linge['x'];
    $id91y[]=$linge['y'];
    $i++;

}

$sql="select x, y
      from data13062017
      where id='92'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id92x[]=$linge['x'];
    $id92y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='93'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id93x[]=$linge['x'];
    $id93y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='94'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id94x[]=$linge['x'];
    $id94y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='95'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id95x[]=$linge['x'];
    $id95y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='96'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id96x[]=$linge['x'];
    $id96y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='97'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id97x[]=$linge['x'];
    $id97y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='98'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id98x[]=$linge['x'];
    $id98y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='99'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id99x[]=$linge['x'];
    $id99y[]=$linge['y'];   
}

$sql="select x, y
      from data13062017
      where id='100'";
$resultat=mysqli_query($session,$sql);
while ($linge=mysqli_fetch_array($resultat))
{
    $id100x[]=$linge['x'];
    $id100y[]=$linge['y'];   
}

?>






    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    
    <div id="main" style="width:4824px;height:4000px;background-image:url(arg_mairie_plan_13062017_4.jpg);background-repeat:no-repeat"></div>

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
                jsarray21x = <?php echo json_encode($id21x);?>;
                jsarray21y = <?php echo json_encode($id21y);?>;
                jsarray22x = <?php echo json_encode($id22x);?>;
                jsarray22y = <?php echo json_encode($id22y);?>;
                jsarray23x = <?php echo json_encode($id23x);?>;
                jsarray23y = <?php echo json_encode($id23y);?>;
                jsarray24x = <?php echo json_encode($id24x);?>;
                jsarray24y = <?php echo json_encode($id24y);?>;
                jsarray25x = <?php echo json_encode($id25x);?>;
                jsarray25y = <?php echo json_encode($id25y);?>;
                jsarray26x = <?php echo json_encode($id26x);?>;
                jsarray26y = <?php echo json_encode($id26y);?>;
                jsarray27x = <?php echo json_encode($id27x);?>;
                jsarray27y = <?php echo json_encode($id27y);?>;
                jsarray28x = <?php echo json_encode($id28x);?>;
                jsarray28y = <?php echo json_encode($id28y);?>;
                jsarray29x = <?php echo json_encode($id29x);?>;
                jsarray29y = <?php echo json_encode($id29y);?>;
                jsarray30x = <?php echo json_encode($id30x);?>;
                jsarray30y = <?php echo json_encode($id30y);?>;
                jsarray31x = <?php echo json_encode($id31x);?>;
                jsarray31y = <?php echo json_encode($id31y);?>;
                jsarray32x = <?php echo json_encode($id32x);?>;
                jsarray32y = <?php echo json_encode($id32y);?>;
                jsarray33x = <?php echo json_encode($id33x);?>;
                jsarray33y = <?php echo json_encode($id33y);?>;
                jsarray34x = <?php echo json_encode($id34x);?>;
                jsarray34y = <?php echo json_encode($id34y);?>;
                jsarray35x = <?php echo json_encode($id35x);?>;
                jsarray35y = <?php echo json_encode($id35y);?>;
                jsarray36x = <?php echo json_encode($id36x);?>;
                jsarray36y = <?php echo json_encode($id36y);?>;
                jsarray37x = <?php echo json_encode($id37x);?>;
                jsarray37y = <?php echo json_encode($id37y);?>;
                jsarray38x = <?php echo json_encode($id38x);?>;
                jsarray38y = <?php echo json_encode($id38y);?>;
                jsarray39x = <?php echo json_encode($id39x);?>;
                jsarray39y = <?php echo json_encode($id39y);?>;
                jsarray40x = <?php echo json_encode($id40x);?>;
                jsarray40y = <?php echo json_encode($id40y);?>;
                jsarray41x = <?php echo json_encode($id41x);?>;
                jsarray41y = <?php echo json_encode($id41y);?>;
                jsarray42x = <?php echo json_encode($id42x);?>;
                jsarray42y = <?php echo json_encode($id42y);?>;
                jsarray43x = <?php echo json_encode($id43x);?>;
                jsarray43y = <?php echo json_encode($id43y);?>;
                jsarray44x = <?php echo json_encode($id44x);?>;
                jsarray44y = <?php echo json_encode($id44y);?>;
                jsarray45x = <?php echo json_encode($id45x);?>;
                jsarray45y = <?php echo json_encode($id45y);?>;
                jsarray46x = <?php echo json_encode($id46x);?>;
                jsarray46y = <?php echo json_encode($id46y);?>;
                jsarray47x = <?php echo json_encode($id47x);?>;
                jsarray47y = <?php echo json_encode($id47y);?>;
                jsarray48x = <?php echo json_encode($id48x);?>;
                jsarray48y = <?php echo json_encode($id48y);?>;
                jsarray49x = <?php echo json_encode($id49x);?>;
                jsarray49y = <?php echo json_encode($id49y);?>;
                jsarray50x = <?php echo json_encode($id50x);?>;
                jsarray50y = <?php echo json_encode($id50y);?>;
                jsarray51x = <?php echo json_encode($id51x);?>;
                jsarray51y = <?php echo json_encode($id51y);?>;
                jsarray52x = <?php echo json_encode($id52x);?>;
                jsarray52y = <?php echo json_encode($id52y);?>;
                jsarray53x = <?php echo json_encode($id53x);?>;
                jsarray53y = <?php echo json_encode($id53y);?>;
                jsarray54x = <?php echo json_encode($id54x);?>;
                jsarray54y = <?php echo json_encode($id54y);?>;
                jsarray55x = <?php echo json_encode($id55x);?>;
                jsarray55y = <?php echo json_encode($id55y);?>;
                jsarray56x = <?php echo json_encode($id56x);?>;
                jsarray56y = <?php echo json_encode($id56y);?>;
                jsarray57x = <?php echo json_encode($id57x);?>;
                jsarray57y = <?php echo json_encode($id57y);?>;
                jsarray58x = <?php echo json_encode($id58x);?>;
                jsarray58y = <?php echo json_encode($id58y);?>;
                jsarray59x = <?php echo json_encode($id59x);?>;
                jsarray59y = <?php echo json_encode($id59y);?>;
                jsarray60x = <?php echo json_encode($id60x);?>;
                jsarray60y = <?php echo json_encode($id60y);?>;
                jsarray61x = <?php echo json_encode($id61x);?>;
                jsarray61y = <?php echo json_encode($id61y);?>;
                jsarray62x = <?php echo json_encode($id62x);?>;
                jsarray62y = <?php echo json_encode($id62y);?>;
                jsarray63x = <?php echo json_encode($id63x);?>;
                jsarray63y = <?php echo json_encode($id63y);?>;
                jsarray64x = <?php echo json_encode($id64x);?>;
                jsarray64y = <?php echo json_encode($id64y);?>;
                jsarray65x = <?php echo json_encode($id65x);?>;
                jsarray65y = <?php echo json_encode($id65y);?>;
                jsarray66x = <?php echo json_encode($id66x);?>;
                jsarray66y = <?php echo json_encode($id66y);?>;
                jsarray67x = <?php echo json_encode($id67x);?>;
                jsarray67y = <?php echo json_encode($id67y);?>;
                jsarray68x = <?php echo json_encode($id68x);?>;
                jsarray68y = <?php echo json_encode($id68y);?>;
                jsarray69x = <?php echo json_encode($id69x);?>;
                jsarray69y = <?php echo json_encode($id69y);?>;
                jsarray70x = <?php echo json_encode($id70x);?>;
                jsarray70y = <?php echo json_encode($id70y);?>;
                jsarray71x = <?php echo json_encode($id71x);?>;
                jsarray71y = <?php echo json_encode($id71y);?>;
                jsarray72x = <?php echo json_encode($id72x);?>;
                jsarray72y = <?php echo json_encode($id72y);?>;
                jsarray73x = <?php echo json_encode($id73x);?>;
                jsarray73y = <?php echo json_encode($id73y);?>;
                jsarray74x = <?php echo json_encode($id74x);?>;
                jsarray74y = <?php echo json_encode($id74y);?>;
                jsarray75x = <?php echo json_encode($id75x);?>;
                jsarray75y = <?php echo json_encode($id75y);?>;
                jsarray76x = <?php echo json_encode($id76x);?>;
                jsarray76y = <?php echo json_encode($id76y);?>;
                jsarray77x = <?php echo json_encode($id77x);?>;
                jsarray77y = <?php echo json_encode($id77y);?>;
                jsarray78x = <?php echo json_encode($id78x);?>;
                jsarray78y = <?php echo json_encode($id78y);?>;
                jsarray79x = <?php echo json_encode($id79x);?>;
                jsarray79y = <?php echo json_encode($id79y);?>;
                jsarray80x = <?php echo json_encode($id80x);?>;
                jsarray80y = <?php echo json_encode($id80y);?>;
                jsarray81x = <?php echo json_encode($id81x);?>;
                jsarray81y = <?php echo json_encode($id81y);?>;
                jsarray82x = <?php echo json_encode($id82x);?>;
                jsarray82y = <?php echo json_encode($id82y);?>;
                jsarray83x = <?php echo json_encode($id83x);?>;
                jsarray83y = <?php echo json_encode($id83y);?>;
                jsarray84x = <?php echo json_encode($id84x);?>;
                jsarray84y = <?php echo json_encode($id84y);?>;
                jsarray85x = <?php echo json_encode($id85x);?>;
                jsarray85y = <?php echo json_encode($id85y);?>;
                jsarray86x = <?php echo json_encode($id86x);?>;
                jsarray86y = <?php echo json_encode($id86y);?>;
                jsarray87x = <?php echo json_encode($id87x);?>;
                jsarray87y = <?php echo json_encode($id87y);?>;
                jsarray88x = <?php echo json_encode($id88x);?>;
                jsarray88y = <?php echo json_encode($id88y);?>;
                jsarray89x = <?php echo json_encode($id89x);?>;
                jsarray89y = <?php echo json_encode($id89y);?>;
                jsarray90x = <?php echo json_encode($id90x);?>;
                jsarray90y = <?php echo json_encode($id90y);?>;
                jsarray91x = <?php echo json_encode($id91x);?>;
                jsarray91y = <?php echo json_encode($id91y);?>;
                jsarray92x = <?php echo json_encode($id92x);?>;
                jsarray92y = <?php echo json_encode($id92y);?>;
                jsarray93x = <?php echo json_encode($id93x);?>;
                jsarray93y = <?php echo json_encode($id93y);?>;
                jsarray94x = <?php echo json_encode($id94x);?>;
                jsarray94y = <?php echo json_encode($id94y);?>;
                jsarray95x = <?php echo json_encode($id95x);?>;
                jsarray95y = <?php echo json_encode($id95y);?>;
                jsarray96x = <?php echo json_encode($id96x);?>;
                jsarray96y = <?php echo json_encode($id96y);?>;
                jsarray97x = <?php echo json_encode($id97x);?>;
                jsarray97y = <?php echo json_encode($id97y);?>;
                jsarray98x = <?php echo json_encode($id98x);?>;
                jsarray98y = <?php echo json_encode($id98y);?>;
                jsarray99x = <?php echo json_encode($id99x);?>;
                jsarray99y = <?php echo json_encode($id99y);?>;
                jsarray100x = <?php echo json_encode($id100x);?>;
                jsarray100y = <?php echo json_encode($id100y);?>;
           


                var heatData = [];
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray1x[i]*5.35+2412),
                        (2000-jsarray1y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray2x[i]*5.35+2412),
                        (2000-jsarray2y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray3x[i]*5.35+2412),
                        (2000-jsarray3y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray4x[i]*5.35+2412),
                        (2000-jsarray4y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray5x[i]*5.35+2412),
                        (2000-jsarray5y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray6x[i]*5.35+2412),
                        (2000-jsarray6y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray7x[i]*5.35+2412),
                        (2000-jsarray7y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray8x[i]*5.35+2412),
                        (2000-jsarray8y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray9x[i]*5.35+2412),
                        (2000-jsarray9y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray10x[i]*5.35+2412),
                        (2000-jsarray10y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray11x[i]*5.35+2412),
                        (2000-jsarray11y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray12x[i]*5.35+2412),
                        (2000-jsarray12y[i]*5.45),
                        0.1
                    ]);
                } 
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray13x[i]*5.35+2412),
                        (2000-jsarray13y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray14x[i]*5.35+2412),
                        (2000-jsarray14y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray15x[i]*5.35+2412),
                        (2000-jsarray15y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray16x[i]*5.35+2412),
                        (2000-jsarray16y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray17x[i]*5.35+2412),
                        (2000-jsarray17y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray18x[i]*5.35+2412),
                        (2000-jsarray18y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray19x[i]*5.35+2412),
                        (2000-jsarray19y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray20x[i]*5.35+2412),
                        (2000-jsarray20y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray21x[i]*5.35+2412),
                        (2000-jsarray21y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray22x[i]*5.35+2412),
                        (2000-jsarray22y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray23x[i]*5.35+2412),
                        (2000-jsarray23y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray24x[i]*5.35+2412),
                        (2000-jsarray24y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray25x[i]*5.35+2412),
                        (2000-jsarray25y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray26x[i]*5.35+2412),
                        (2000-jsarray26y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray27x[i]*5.35+2412),
                        (2000-jsarray27y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray28x[i]*5.35+2412),
                        (2000-jsarray28y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray29x[i]*5.35+2412),
                        (2000-jsarray29y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray30x[i]*5.35+2412),
                        (2000-jsarray30y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray31x[i]*5.35+2412),
                        (2000-jsarray31y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray32x[i]*5.35+2412),
                        (2000-jsarray32y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray33x[i]*5.35+2412),
                        (2000-jsarray33y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray34x[i]*5.35+2412),
                        (2000-jsarray34y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray35x[i]*5.35+2412),
                        (2000-jsarray35y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray36x[i]*5.35+2412),
                        (2000-jsarray36y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray37x[i]*5.35+2412),
                        (2000-jsarray37y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray38x[i]*5.35+2412),
                        (2000-jsarray38y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray39x[i]*5.35+2412),
                        (2000-jsarray39y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray40x[i]*5.35+2412),
                        (2000-jsarray40y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray41x[i]*5.35+2412),
                        (2000-jsarray41y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray42x[i]*5.35+2412),
                        (2000-jsarray42y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray43x[i]*5.35+2412),
                        (2000-jsarray43y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray44x[i]*5.35+2412),
                        (2000-jsarray44y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray45x[i]*5.35+2412),
                        (2000-jsarray45y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray46x[i]*5.35+2412),
                        (2000-jsarray46y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray47x[i]*5.35+2412),
                        (2000-jsarray47y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray48x[i]*5.35+2412),
                        (2000-jsarray48y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray49x[i]*5.35+2412),
                        (2000-jsarray49y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray50x[i]*5.35+2412),
                        (2000-jsarray50y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray51x[i]*5.35+2412),
                        (2000-jsarray51y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray52x[i]*5.35+2412),
                        (2000-jsarray52y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray53x[i]*5.35+2412),
                        (2000-jsarray53y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray54x[i]*5.35+2412),
                        (2000-jsarray54y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray55x[i]*5.35+2412),
                        (2000-jsarray55y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray56x[i]*5.35+2412),
                        (2000-jsarray56y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray57x[i]*5.35+2412),
                        (2000-jsarray57y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray58x[i]*5.35+2412),
                        (2000-jsarray58y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray59x[i]*5.35+2412),
                        (2000-jsarray59y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray60x[i]*5.35+2412),
                        (2000-jsarray60y[i]*5.45),
                        0.1
                    ]);
                }
                 
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray61x[i]*5.35+2412),
                        (2000-jsarray61y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray62x[i]*5.35+2412),
                        (2000-jsarray62y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray63x[i]*5.35+2412),
                        (2000-jsarray63y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray64x[i]*5.35+2412),
                        (2000-jsarray64y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray65x[i]*5.35+2412),
                        (2000-jsarray65y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray66x[i]*5.35+2412),
                        (2000-jsarray66y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray67x[i]*5.35+2412),
                        (2000-jsarray67y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray68x[i]*5.35+2412),
                        (2000-jsarray68y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray69x[i]*5.35+2412),
                        (2000-jsarray69y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray70x[i]*5.35+2412),
                        (2000-jsarray70y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray71x[i]*5.35+2412),
                        (2000-jsarray71y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray72x[i]*5.35+2412),
                        (2000-jsarray72y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray73x[i]*5.35+2412),
                        (2000-jsarray73y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray74x[i]*5.35+2412),
                        (2000-jsarray74y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray75x[i]*5.35+2412),
                        (2000-jsarray75y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray76x[i]*5.35+2412),
                        (2000-jsarray76y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray77x[i]*5.35+2412),
                        (2000-jsarray77y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray78x[i]*5.35+2412),
                        (2000-jsarray78y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray79x[i]*5.35+2412),
                        (2000-jsarray79y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray80x[i]*5.35+2412),
                        (2000-jsarray80y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray81x[i]*5.35+2412),
                        (2000-jsarray81y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray82x[i]*5.35+2412),
                        (2000-jsarray82y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray83x[i]*5.35+2412),
                        (2000-jsarray83y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray84x[i]*5.35+2412),
                        (2000-jsarray84y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray85x[i]*5.35+2412),
                        (2000-jsarray85y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray86x[i]*5.35+2412),
                        (2000-jsarray86y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray87x[i]*5.35+2412),
                        (2000-jsarray87y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray88x[i]*5.35+2412),
                        (2000-jsarray88y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray89x[i]*5.35+2412),
                        (2000-jsarray89y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray90x[i]*5.35+2412),
                        (2000-jsarray90y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray91x[i]*5.35+2412),
                        (2000-jsarray91y[i]*5.45),
                        0.1
                    ]);
                }

               
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray92x[i]*5.35+2412),
                        (2000-jsarray92y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray93x[i]*5.35+2412),
                        (2000-jsarray93y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray94x[i]*5.35+2412),
                        (2000-jsarray94y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray95x[i]*5.35+2412),
                        (2000-jsarray95y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray96x[i]*5.35+2412),
                        (2000-jsarray96y[i]*5.45),
                        0.1
                    ]);
                }
                for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray97x[i]*5.35+2412),
                        (2000-jsarray97y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray98x[i]*5.35+2412),
                        (2000-jsarray98y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray99x[i]*5.35+2412),
                        (2000-jsarray99y[i]*5.45),
                        0.1
                    ]);
                }
                 for (var i = 0; i < <?php echo json_encode($i);?>; i++) {
                    heatData.push([
                        (jsarray100x[i]*5.35+2412),
                        (2000-jsarray100y[i]*5.45),
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
                             data:heatData,
            
                            
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
                            
                           
                            blurSize:15,
                            minAlpha: 0.1,
                            valueScale: 1,
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



