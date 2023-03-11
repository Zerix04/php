<?php
require_once("koneksi.php");
@$nis = $_GET['nis'];
?>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    
    <table>
        <form action="proses_cari.php" method="post">
        <tr>
                <td>cari</td>
                <td>:</td>
                <td>
                    <input type="text" name="nis">
                    <input type="submit" value="cari">
                </td>
            </form>
        </tr>
        <tr>
    <form action="proses_simpanpinjaman.php" method="POST">
        <td>Siswa</td>
        <td>:</td>
        <td>
        
        <?php
        $query_siswa = mysqli_query($koneksi , "select * from siswa where nis='$nis'");
        $data_siswa = mysqli_fetch_array($query_siswa)
        ?>

            <input type="hidden" name="id" value="<?=$data_siswa['nis']?>">
            <input type="text" name="siswa" value="<?=$data_siswa['nama']?>" disabled>
      
        </td>
    </tr>
    <tr>
        <td>Buku</td>
        <td>:</td>
        <td>
        <select name="buku" >
        <?php
        $query_buku = mysqli_query($koneksi , "select * from buku");
        while($data_buku = mysqli_fetch_object($query_buku)) {
        ?>

        <option value="<?=$data_buku->id_buku?>" ><?=$data_buku->judul_buku?></option>
        <?php
        }
        ?>
        </select>
        </td>
    </tr>

    <tr>    
        <td>tanggal kembali</td>
        <td>:</td>
        <td><input type="date" name="tgl_kembali"></td>
    </tr>

    <tr>
      <td>
      <input type="submit" name="simpan" value="simpan">
      </td>  
    </tr>
    
</table>
</form>

<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <td>No</td>
    <td>No_peminjaman</td>
    <td>id_buku</td>
    <td>judul_buku</td>
    <td>nama siswa</td>
    <td>tgl_pinjam</td>
    <td>tgl_kembali</td>
</tr>
<?php
$no = 1;
$query_peminjaman= mysqli_query($koneksi,
"select * from peminjaman
inner join buku on buku.id_buku = peminjaman.id_buku
inner join siswa on siswa.nis = peminjaman.nis");
while($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {

?>
<tr>
    <td><?=$no?></td>
    <td><?=$data_peminjaman->no_pinjam?></td>
    <td><?=$data_peminjaman->nis?></td>
    <td><?=$data_peminjaman->judul_buku?></td>
    <td><?=$data_peminjaman->nama?></td>
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