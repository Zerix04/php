<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3>Daftar Nama inisial S</h3>


    <?php
    $nama = ['siska', 'sisu', 'susi', 'suci', 'salsa'];

    foreach ($nama as $n) {

        if ($n == 'susi') {
            echo $n . " itu nama saya <br>";
        } else {
            echo  $n . "<br>";
        }
    }
    ?>


</body>

</html>