<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//menangkap data yang dikirim dari form jadwal
$id = $_POST['id'];
$kd_dosen = $_POST['kd_dosen'];
$kd_mk = $_POST['kd_mk'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];

//menginput data ke tabel jadwal
mysqli_query($koneksi,"insert into tbl_jadwal values('','$kd_dosen','$kd_mk','$ruang','$waktu')");

//mengalihkan halaman kembali ke jadwal_list.php
header("location:jadwal_list.php");
?>