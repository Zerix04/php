<!DOCTYPE html>
<html lang="en">

<head>

    <title>php</title>
</head>

<body>

    <?php
    $nama_depan = 'AKBAR DHIA';
    $nama_belakang = 'SATRIA';
    $nilai = 99;
    ?>

    <h1>Belajar php <?= "dan nilai saya adalah " . $nilai; ?> </h1>

    <?php echo "Nama saya "
        . $nama_depan . " - " . $nama_belakang; ?>

</body>

</html>