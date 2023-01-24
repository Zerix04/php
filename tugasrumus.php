<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Rumus</title>
</head>

<body>

    <h1 style="text-align: center;">Aplikasi Sederhana Menghitung Rumus Luas Segitiga & Persegi Panjang</h1>
    <hr>

    <form action="proses2.php" method="POST">
        Nilai 1 : <input type="number" name="l1"><br><br>
        Nilai 2 : <input type="number" name="l2"><br><br>

        <select name="rumus" id="">
            <option value="" disabled>Pilih</option>
            <option value="Lsg">Luas Segitiga</option>
            <option value="Lpp">Luas Persegi Panjang</option>

        </select>


        <br><br>
        <input type="submit" name="hitung" value="Hasil">
    </form>



    <?php
    ?>
</body>

</html>