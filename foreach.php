<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar Forit</title>
</head>

<body>
    <?php
    $menu = [
        "Menu Makanan" =>
        [
            "sego goreng", "mie goreng"
        ],

        "Menu Minuman" =>
        [
            "es jeruk", "kelapa muda",

            "Cappucino" =>
            [" cappucino dingin ", "cappucino panas"]


        ],



    ];
    $no = 1;
    foreach ($menu['Menu Makanan'] as $m) {
        echo $no . "." . $m . "<br>";
        $no++;
    }
    ?>

</body>

</html>