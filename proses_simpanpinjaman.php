<?php
require_once("koneksi.php");
if(isset($_POST['id'])) {
$no_pinjam =$_POST['id'] . "-" . date('Y-m-d');
$id_buku = $_POST['buku'];
$id_siswa = $_POST['id'];
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = $_POST['tgl_kembali'];

$query = mysqli_query($koneksi , "insert into peminjaman values 
('$no_pinjam','$id_buku','$id_siswa','$tgl_pinjam','$tgl_kembali')");


    if($query) {
        header('location:peminjaman.php');
    }
}

if (isset($_POST['cari'])) {
    $query = mysqli_query($koneksi , "select * from siswa" );
    if($query) {
        header('location:peminjaman.php');
    }
}

