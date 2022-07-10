<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";


//mengambil kd_mk dari tabel mata kuliah
$kd_mk = $_GET['kd_mk'];

//menghapus data dari tabel mata kuliah
mysqli_query($koneksi,"delete from tbl_mk where kd_mk=$kd_mk") or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));

   //mengalihkan halaman kembali ke matkul_list.php
header("location:matkul_list.php");
?>
