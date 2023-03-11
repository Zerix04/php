<?php
session_start();
require_once("koneksi.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <td>No</td>
    <td>judul_buku</td>
    <td>tgl_pinjam</td>
    <td>tgl_kembali</td>
</tr>
<?php
$id = $_SESSION['nis'];
$no = 1;

$query_peminjaman= mysqli_query($koneksi,
"select * from peminjaman inner join buku ON buku.id_buku = peminjaman.id_buku where nis=$id");
while($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {

?>
<tr>
    <td><?=$no?></td>
    <td><?=$data_peminjaman->judul_buku?></td>
    <td><?=$data_peminjaman->tgl_pinjam?></td>
    <td><?=$data_peminjaman->tgl_kembali?></td>
</tr>
<?php
$no++;
}
?>
</table>
</body>
</html>