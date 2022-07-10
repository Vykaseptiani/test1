<html>
<head>
	<title>DATA MATA KULIAH</title>
<!-- mengambil data boostrap css online-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- mengambil data boostrap js online-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<!--bagian header-->
<header>
  <!-- tampilan navbar menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01"
        aria-expanded="false" aria-label="Toggle navigation">

        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  href="../admin_dashboard.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dosen/dosen_list.php">Dosen</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="matkul_list.php">Mata Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jadwal/jadwal_list.php">Jadwal Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir tampilan navbar menu -->

  <!-- tampilan isi content -->
  <div class="p-5 text-center bg-light">
    <h2>DATA MATA KULIAH</h2>
	<hr>
	<!--table tombol tambah data mata kuliah-->
	<table class="table align-middle mb-0 bg-white">
		<tr>
			<td> <a href="matkul_add.php"><button class="btn btn-primary"> + Tambah Data Mata Kuliah </button></a></td>
		</tr>
	</table>
	<!--akhir table tombol tambah data mata kuliah-->
<br>
<!--table view data mata kuliah-->
<table class="table align-middle mb-0 bg-white">
	<tr>
		<th>No</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
		<th>Aksi</th>
	</tr>
<?php

//menghubungkan dengan koneksi
include "../config/koneksi.php";
//membuat variabel dengan nilai awal 1
$no = 1;

//mengambil data dari tabel dosen
$sql = mysqli_query($koneksi, "select * from tbl_mk");
while ($data = mysqli_fetch_array($sql)){
?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['kd_mk']; ?></td>
		<td><?php echo $data['nm_mk']; ?></td>
		<td><?php echo $data['sks']; ?></td>
		<td>
			<a href="matkul_edit.php?kd_mk=<?php echo $data['kd_mk'];?>"><button class="btn btn-warning">Edit</button></a>
			<a href="matkul_delete.php?kd_mk=<?php echo $data['kd_mk'];?>" onclick="return confirm('Anda yakin ingin menghapus data Mata Kuliah = <?php echo $data['nm_mk']; ?> ?');"><button class="btn btn-danger">Hapus</button></a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
<!--akhir table view data mata kuliah-->

<br><br>
<table >
	<tr>
		<a href="../admin_dashboard.php"> <button class="btn btn-dark">Kembali ke Menu Utama</button></a>
	</tr>
</table>
  </div>
  <!-- akhir dari tampilan isi content -->
</header>
<!--akhir bagian header-->

<!--tampilan footer-->
<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <div class="container p-4"></div>

  <!-- bagian Copyright -->
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);"> by :
    <a class="text-white" href="#">Raden W.K.P.</a>
  </div>
  <!-- akhir bagian Copyright -->
</footer>
<!--akhir footer-->
	
</body>
</html>