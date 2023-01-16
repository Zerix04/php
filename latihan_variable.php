<html>

<head>
    <title>Latihan Variable PHP</title>
</head>

<body>

    <h1 style="color:red">BIODATA</h1>
    <hr>

    <?php

    $nama = "Akbar Dhia Satria";
    $kelas = "XI TI";
    $jurusan = "Pengembangan Perangkat Lunak dan Gim (PPLG)";
    ?>

    <table>
        <tr>
            <td>
                <?= "Nama"
                ?>
            </td>
            <td>:</td>
            <td style="background-color:orange;"><?= $nama; ?></td>
        </tr>
        <tr>
            <td>
                <?= "Kelas" ?>
            </td>
            <td>:</td>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        </tr>
        <tr>
            <td>
                <?= "Jurusan"
                ?>
            </td>
            <td>:</td>
            <td><?= $jurusan;
                ?></td>
        </tr>
    </table>


    <hr>

    <?php
    echo "<i>Latihan Variable dengan <b>PHP</b></i>"
    ?>

</body>

</html>