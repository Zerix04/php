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

        <select name="rumus" id="">
            <option value="kali">*</option>
            <option value="tambah">+</option>
            <option value="bagi">/</option>
            <option value="kurang">-</option>
        </select>
<br><br>
        <?php

        $n1 =($_POST['l12']);
        $n2 =($_POST['l22']);
        $rumus =($_POST['rumus']);

        if ($n1 == '' || $n2 == ''){
             $hsil = 0;
        }else{
            
            if($rumus == 'kali'){
                function perkalian($n1,$n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 * $nilai2;
                    return $hasil;
                }
                $hsil = perkalian($n1, $n2);
            }

            if($rumus == 'kurang'){
                function pengurangan($n1,$n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 - $nilai2;
                    return $hasil;
                }
                $hsil = pengurangan($n1 , $n2);
            }

            if($rumus == 'bagi'){
                function pembagian($n1,$n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 / $nilai2;
                    return $hasil;
                }
                $hsil = pembagian($n1 , $n2);
            }

            if($rumus == 'tambah'){
                function pertambahan($n1,$n2)
                {
                    $nilai1 = $n1;
                    $nilai2 = $n2;
                    $hasil  = $nilai1 + $nilai2;
                    return $hasil;
                }
                $hsil =  pertambahan($n1 , $n2);
            }
        }

        ?>
        
      Hasil =  <input type="number" disabled value="<?= $hsil?>">
        <br><br>
        <input type="submit" name="hitung" value="hasil">

       
</form>
<br><br>

</body>
</html>