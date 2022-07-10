<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";

//mengambil kd_dosen dari tabel dosen
$kd_dosen = $_GET['kd_dosen'];

//menghapus data dari tabel dosen
mysqli_query($koneksi,"delete from tbl_dosen where kd_dosen=$kd_dosen") or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));

//mengalihkan halaman kembali ke dosen_list.php
header("location:dosen_list.php");
?>