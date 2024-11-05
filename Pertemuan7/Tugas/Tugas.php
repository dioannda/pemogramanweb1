<?php
$pemasukan = 50_000_000;
$hutangA = 16_500_000;
$bungaHutangA = 5/100 * $hutangA;
$hutangB = 9_500_000;
$bungaHutangB = 4.5/100 * $hutangB;
echo "jumlah sisa uang: <br>";
echo $pemasukan - (($hutangA + $bungaHutangA)+($hutangB + $bungaHutangB))."<br>";
echo "jumlah total bunga hutang:<br>";
echo $bungaHutangA+$bungaHutangB."<br>";
echo "Jumlah Total Hutang : <br>";
echo $hutangA + $hutangB;
?>