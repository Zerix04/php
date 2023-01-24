<!DOCTYPE html>
<html lang="en">

<head>
    <title>kalkulator</title>
</head>

<body>
    <h1 style="text-align: center;">Kalkulator sederhana</h1>

    <hr>

    <form method="POST">
        Nilai 1 : <input type="number" name="l12"><br><br>
        Nilai 2 : <input type="number" name="l22"><br><br>


        <input type="submit" value="*" name="rumus"></input>
        <input type="submit" value="+" name="rumus"></input>
        <input type="submit" value="/" name="rumus"></input>
        <input type="submit" value="-" name="rumus"></input>

        <br><br>
        <?php

        $n1 = ($_POST['l12']);
        $n2 = ($_POST['l22']);
        $rumus = ($_POST['rumus']);

        if ($n1 == '' || $n2 == '') {
            $hsil = 0;
        } else {

            if ($rumus == '*') {
                function perkalian($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 * $nilai2;
                    return $hasil;
                }
                $hsil = perkalian($n1, $n2);
            }

            if ($rumus == '-') {
                function pengurangan($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 - $nilai2;
                    return $hasil;
                }
                $hsil = pengurangan($n1, $n2);
            }

            if ($rumus == '/') {
                function pembagian($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 / $nilai2;
                    return $hasil;
                }
                $hsil = pembagian($n1, $n2);
            }

            if ($rumus == '+') {
                function pertambahan($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 + $nilai2;
                    return $hasil;
                }
                $hsil =  pertambahan($n1, $n2);
            }
        }

        ?>

        Hasil = <input type="number" disabled value="<?= $hsil ?>">
        <br><br>



    </form>
    <br><br>

</body>

</html>