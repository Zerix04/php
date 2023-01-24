<!DOCTYPE html>
<html lang="en">

<head>
    <title>kalkulator</title>
</head>

<body>

    <h1 style="text-align: center;">Aplikasi Penghitung Sederhana</h1>
    <hr>

    <form method="POST">
        Nilai 1 : <input type="number" name="l1"><br><br>
        Nilai 2 : <input type="number" name="l2"><br><br>

        <select name="rumus" id="">
            <option value="kali">*</option>
            <option value="tambah">+</option>
            <option value="bagi">/</option>
            <option value="kurang">-</option>
        </select>
        <?php

        $n1 = ($_POST['l1']);
        $n2 = ($_POST['l2']);
        $rumus = ($_POST['rumus']);

        if ($n1 == '' || $n2 == '') {
            $hsil = 0;
        } else {

            if ($rumus == 'kali') {
                function perkalian($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil =  $nilai1 * $nilai2;
                    return $hasil;
                }
                $hsil = perkalian($n1, $n2);
            }

            if ($rumus == 'kurang') {
                function pengurangan($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil = $nilai1 - $nilai2;
                    return $hasil;
                }
                $hsil = pengurangan($n1, $n2);
            }

            if ($rumus == 'tambah') {
                function pertambahan($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil = $nilai1 + $nilai2;
                    return $hasil;
                }
                $hsil = pertambahan($n1, $n2);
            }

            if ($rumus == 'bagi') {
                function pembagian($n1, $n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil = $nilai1 / $nilai2;
                    return $hasil;
                }
                $hsil = pembagian($n1, $n2);
            }
        }
        ?>
        <input type="number" value="<?= $hsil; ?>"></input>

    </form>
    <br><br>



    <br><br>
    <input type="submit" name="hitung" value="hasil">
    </form>



</body>

</html>