<?php
$uf  = 29411.83;
$ipc = 0.4;
$reajusteDiario = (1+$ipc/100)**(1/30);
$comienzo = new DateTime('10-04-2021');
$final = new DateTime('09-05-2021');
$final = $final->modify('+1 day');

$intervalo = DateInterval::createFromDateString('1 day');
$periodo = new DatePeriod($comienzo, $intervalo, $final);

foreach ($periodo as $dt) {		
$uf =$uf*$reajusteDiario;
$uf = round($uf,2);	
	echo "Fecha ".$dt->format("Y-m-d")." - ".$uf."; <br>";
}
