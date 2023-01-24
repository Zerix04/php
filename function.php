<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar function dengan php</title>
</head>

<body>
    <h1>function</h1>

    <?php
    // function adalah sekumpulan kode yang menjalankan perintah tertentu dan dapat dipanggil secara berulang

    function segitiga($a, $t, $g, $c, $k)
    {
        $alas = $a;
        $tinggi = $t;
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    echo segitiga(10, 20, 4, 5, 3);
    ?>
</body>

</html>