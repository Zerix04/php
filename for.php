<html>

<head>
    <title>Belajar For</title>
</head>

<body>
    <h1>Belajar For Dengan PHP</h1>

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
    echo ("<h1>Menu Makanan</h1><br> ");
    // echo count($menu["Menu Makanan"]);
    for (
        $i = 0;
        $i < count($menu["Menu Makanan"]);
        $i++
    ) {
        echo ($i + 1) . ". " . $menu["Menu Makanan"][$i] . "<br>";
    }


    ?>
</body>

</html>