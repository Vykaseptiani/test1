<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//menangkap data yang dikirim dari form dosen
$kd_dosen = $_POST['kd_dosen'];
$nm_dosen = $_POST['nm_dosen'];
$alamat = $_POST['alamat'];

//menginput data ke tabel dosen
mysqli_query($koneksi,"insert into tbl_dosen values('$kd_dosen','$nm_dosen','$alamat')");

//mengalihkan halaman kembali ke dosen_list.php
header("location:dosen_list.php");
?>