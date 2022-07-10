<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//menangkap data yang dikirim dari form mata kuliah
$kd_mk = $_POST['kd_mk'];
$nm_mk = $_POST['nm_mk'];
$sks = $_POST['sks'];

//menginput data ke tabel mata kuliah
mysqli_query($koneksi,"insert into tbl_mk values('$kd_mk','$nm_mk','$sks')");

//mengalihkan halaman kembali ke matkul_list.php
header("location:matkul_list.php");
?>