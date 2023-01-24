<?php
$n1 = ($_POST['l1']);
$n2 = ($_POST['l2']);
$rumus = ($_POST['rumus']);

if ($n1 == '' || $n2 == '') {
    echo 'isi nilainya';
} else {

    if ($rumus == 'Lsg') {
        function segitiga($n1, $n2)
        {
            $alas = $n1;
            $tinggi = $n2;
            $luas = 0.5 * $alas * $tinggi;
            return $luas;
        }
        echo "hasil = " . segitiga($n1, $n2);
    }

    if ($rumus == 'Lpp') {
        function persegipanjang($n1, $n2)
        {
            $panjang = $n1;
            $lebar = $n2;
            $luas = $panjang * $lebar;
            return $luas;
        }
        echo "hasil = " . persegipanjang($n1, $n2);
    }
}
