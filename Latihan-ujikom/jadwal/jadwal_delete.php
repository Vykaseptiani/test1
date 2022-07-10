<?php
//menghubungkan dengan koneksi
include "../config/koneksi.php";


//mengambil kd_mk dari tabel jadwal
$id = $_GET['id'];

//menghapus data dari tabel jadwal
$sql = mysqli_query($koneksi,"delete from tbl_jadwal where id=$id")
	   or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));

   //mengalihkan halaman kembali ke jadwal_list.php
header("location:jadwal_list.php");
?>
