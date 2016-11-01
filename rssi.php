<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>RSSI nodo</title>
</head>
<body>
<?php 
	$ch1 = 0;
	$ch2 = 0;
	$rssi_ch1 = 0;
	$rssi_ch2 = 0;
	$c = 1;
	$primer_rssi = false;
	while($c<=7){
		$rssi = rand(0,50);
		echo "<p>ACK de Nodo: ".$c." RSSI=".$rssi."</p>\n";
		if(!$primer_rssi){
			$ch1 = $c;
			$rssi_ch1 = $rssi;
			$rssi_ch2 = $rssi_ch1;
			$primer_rssi = true;
		}
		
		$c++;
	}
	echo "</br>";
	echo "<p>CH1 = ".$ch1." RSSI = ".$rssi_ch1."</p>";
	echo "<p>CH2 = ".$ch2." RSSI = ".$rssi_ch2."</p>";
 ?>
</body>
</html>