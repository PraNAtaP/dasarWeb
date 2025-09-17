<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br> Jumlah buah yang akan dipanen adalah : $jumlahBuah buah.";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br> Total skor ujian adalah: $totalSkor.<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

// Soal No. 4.6
$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($daftarNilai);
$jmlSiswa = count($daftarNilai) - 4;
$totalNilai = 0;
for ($i = 2; $i < count($daftarNilai); $i++) {
    $totalNilai += $daftarNilai[$i];
}
$rataRata = $totalNilai / $jmlSiswa;
echo "<br> Daftar Nilai Mahasiswa : " . implode(", ", $daftarNilai);
echo "<br> Total nilai(Tanpa 2 nilai tertingg dan 2 nilai terendah): $totalNilai";
echo "<br> Rata-rata nilai (Tanpa 2 nilai tertingg dan 2 nilai terendah): $rataRata";

// Soal No. 4.7
$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.2;
}

$pembayaran = $harga - ($harga * $diskon);
echo "<br><br> Harga yang harus dibayar : $pembayaran </br>";

// Soal No. 4.8
$poin = 450;

echo "<br> Total skor pemain adalah : $poin";
$hadiah = ($poin > 500)? "YA" : "TIDAK";
echo "<br> Apakah pemain mendapatkan hadiah tambahan? $hadiah";