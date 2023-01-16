<!DOCTYPE html>
<html>

<head>
    <title>Belajar Array Multidimensi</title>
</head>

<body>
    <h1>Belajar array multidimensi</h1>

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

    echo count($menu["Menu Minuman"]["Cappucino"]);

    ?>
</body>

</html>