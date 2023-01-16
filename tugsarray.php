<!DOCTYPE html>
<html lang="en">

<head>
    <title>Array</title>
    <style>
        .w {
            width: 100px;
            background-color: brown;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;

        }

        .ww {
            width: 100px;
            background-color: chocolate;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;

        }

        .clear {
            clear: right;
        }
    </style>
</head>

<body>

    <h1 style="color: orange;">BELAJAR ARRAY DI PHP</h1>


    <?php
    $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];


    for (
        $i = 0;
        $i < count($hari);
        $i++
    ) {
        echo  '<div class="w">' . $hari[$i] . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "<h5>Looping dengan <br>
    <b>FOR</b></h5>";


    foreach ($hari as $h) {
        echo '<div class="ww">' . $h . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "Looping dengan <br>
    <b>FOREACH</b>";

    ?>

</body>

</html>