<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//menangkap data yang dikirim dari form edit jadwal
$id = $_POST['id'];
$kd_dosen = $_POST['kd_dosen'];
$kd_mk = $_POST['kd_mk'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];

//update data ke ke tabel jadwal
mysqli_query($koneksi,"update tbl_jadwal set id ='$id',kd_dosen='$kd_dosen',kd_mk='$kd_mk',ruang='$ruang', waktu='$waktu' where id='$id'");

//mengalihkan halaman kembali ke jadwal_list.php
header("location:jadwal_list.php");
?>