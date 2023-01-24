<!DOCTYPE html>
<html lang="en">

<head>
    <title>Azcom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    </div>
    <div class="container">
        <div class="header">
            <img src="th.png" width="170px" style="float: left;">
            <h1 style="float: left;">AZCOM KOMPUTER</h1>
        </div>
        <div class="menu">
            <a href="index.php">beranda</a>
            <a href="katalog.php">katalog</a>
        </div>
        <div class="content">
            <form action="" method="POST">
                Pilihan :
                <select name="katalog" id="h">
                    <option value="" disabled></option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>

                <input type="submit" value="tampilkan" name="tombol">
                <hr>
                <table border="1px" cellpadding="3" cellspasing="0" width="300px">
                    <tr>
                        <th>no</th>
                        <th>nama</th>
                        <th>jenis</th>
                    </tr>
                    <?php
                    $hardware = ['Monitor', 'CPU', 'Keyboard', 'Mouse'];
                    $software = ['WindowsOS', 'LinuxOS', 'MacOS'];

                    if (isset($_POST['tombol'])) {

                        $katalog = ($_POST['katalog']);

                        if ($katalog == 'hardware') {
                            $no = 1;
                            foreach ($hardware as $h) {
                                echo "<tr>
                            <td>$no</td>
                            <td>$h</td>
                            <td>Hardware</td>
                        </tr>";
                                $no++;
                            }
                        }

                        if ($katalog == 'software') {
                            $no = 1;
                            foreach ($software as $s) {
                                echo "<tr>
                            <td>$no</td>
                            <td>$s</td>
                            <td>Software</td>
                        </tr>";
                                $no++;
                            }
                        }
                    }

                    ?>

                </table>
            </form>
        </div>
        <div class="footer">Copyright &copy 2023</div>
    </div>
</body>

</html>