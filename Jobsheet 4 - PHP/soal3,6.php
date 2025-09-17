<?php
$kuota = 45;
$ditempati = 28;
$kursiKosong = $kuota - $ditempati;
$persentase = ($ditempati / $kuota) * 100;

echo "Jumlah kursi: {$kuota} <br>";
echo "Jumlah kursi yang ditempati: {$ditempati} <br>";
echo "Jumlah kursi yang kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang ditempati: {$persentase}% <br>";