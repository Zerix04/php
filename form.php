<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buku Tamu</title>
</head>

<body>

    <h1>Buku Tamu</h1>

    <hr>
    <form action="proses.php" method="post">

        nama :<input type="text" name="nama"><br>
        email:<input type="email" name="email"><br>
        pesan:<textarea name="pesan"></textarea><br>

        <input type="submit" name="simpan" value="Simpan">

    </form>
    <?php

    $p = ['nama', 'email', 'pesan'];

    ?>

</body>

</html>