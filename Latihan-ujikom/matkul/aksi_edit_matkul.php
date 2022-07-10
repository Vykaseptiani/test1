<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//menangkap data yang dikirim dari form edit mata kuliah
$kd_mk = $_POST['kd_mk'];
$nm_mk = $_POST['nm_mk'];
$alamat = $_POST['alamat'];

//update data ke ke tabel mata kuliah
mysqli_query($koneksi,"update tbl_mk set kd_mk ='$kd_mk',nm_mk='$nm_mk',alamat='$alamat' where kd_mk='$kd_mk'");

//mengalihkan halaman kembali ke matkul_list.php
header("location:matkul_list.php");
?>