<?php
// Include konenksi database
include './config.php';

//menangkap data di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//Menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");
//Mengembalikan ke halaman awal
header("location:./index.php");