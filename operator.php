<html>

<head>
    <title>Operator</title>
</head>

<body>
    <?php
    $nilai_a = 10;
    $nilai_b = 20;
    $hasil_tambah = $nilai_a + $nilai_b;
    $hasil_kurang = $nilai_b - $nilai_a;
    $hasil_kali = $nilai_a * $nilai_b;
    $hasil_bagi = $nilai_b / $nilai_a;

    echo "<b>NILAI A = $nilai_a </b><br>";
    echo "<b>NILAI B = $nilai_b </b><br><br>";

    echo "<b>Hasil Penjumlahan Nilai A dengan Nilai B = $hasil_tambah</b><br>";
    echo "<b>Hasil Pengurangan Nilai B dengan Nilai A = $hasil_kurang</b><br>";
    echo "<b>Hasil Perkalian Nilai A dengan Nilai B = $hasil_kali</b><br>";
    echo "<b>Hasil Pembagian Nilai B dengan Nilai A = $hasil_bagi</b><br>";

    ?>

    <?php

    $a = 2;
    $b = 3;

    $hasilbagi = $a % $b;
    $pangkat = $a ** $b;

    echo "<b>2 pangkat 3 = $pangkat</b> <br>";
    echo "<b>Hasil bagi 2/3 = $hasilbagi</b>";

    ?>
</body>

</html>