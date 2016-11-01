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
	$segundo_rssi = false;
	while($c<=7){
		$rssi = rand(0,50);
		echo "<p>ACK de Nodo: ".$c." RSSI=".$rssi."</p>\n";
		if(!$primer_rssi){ //asignacion del primer rssi 
			$ch1 = $c;
			$rssi_ch1 = $rssi;
			$primer_rssi = true;
		}
		else if(!$segundo_rssi){ //asignacion del segundo rssi
			$rssi = 0;
			if($rssi<$rssi_ch1){
				if($ch1!=$c){
					$ch2 = $ch1;
					$ch1 = $c;
					$rssi_ch2 = $rssi_ch1;
					$rssi_ch1 = $rssi;
				}
				else{
					$rssi_ch2 = $rssi_ch1;
					$rssi_ch1 = $rssi;
					$ch2 = $ch1+1;
				}
				echo "<br>";
				echo "<p>CH1 = ".$ch1." RSSI = ".$rssi_ch1."</p>";
				echo "<p>CH2 = ".$ch2." RSSI = ".$rssi_ch2."</p>";
				echo "<br>";
			}
			else{
				$ch2 = $c;
				$rssi_ch2 = $rssi;
			}
			$segundo_rssi = true;
		}

		if($rssi<$rssi_ch2){ //
			if($rssi<$rssi_ch1){
				if($ch2!=$c){
					$ch1 = $c;
					$rssi_ch1 = $rssi;
				}
				else{
					$ch2 = $ch1;
					$rssi_ch2 = $rssi_ch1;
					$ch1 = $c;
					$rssi_ch1 = $rssi;
				}
			}
			else{
				if($ch1!=$c){
					$ch2 = $c;
					$rssi_ch2 = $rssi;
				}
			}
		}
		$c++;
	}
	echo "</br>";
	echo "<p>CH1 = ".$ch1." RSSI = ".$rssi_ch1."</p>";
	echo "<p>CH2 = ".$ch2." RSSI = ".$rssi_ch2."</p>";
 ?>
</body>
</html>