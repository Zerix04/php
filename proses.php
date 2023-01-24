<?php

// echo "nama :" . $_POST['nama'];
// if ($_POST['nama'] == '') {
//     echo "isi namanya broo";
//     echo "<br>";
// }

// echo "email :" . $_POST['email'];
// if ($_POST['email'] == '') {
//     echo "isi emaill ";
//     echo "<br>";
// }

// echo "pesan :" . $_POST['pesan'];
// if ($_POST['pesan'] == '') {
//     echo "berikan pesan muu";
//     echo "<br>";
// }

$nama = ($_POST['nama']);
$email =($_POST['enail']);
$pesan =($_POST['pesan']);

if($nama == ''){
    echo "nama belum diisi<br>";
}

if($nama){
    echo "nama :" . $nama . "<br>";
 }


 if($email == ''){
    echo "email belum diisi<br>";
}

if($email){
    echo "email :" . $email . "<br>";
 }


 if($pesan0 == ''){
    echo "nama belum diisi<br>";
}

if($nama){
    echo "nama :" . $nama . "<br>";
 }
