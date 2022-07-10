<html>
<head>
	<title>DATA JADWAL MATA KULIAH</title>
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
          <li class="nav-item">
            <a class="nav-link" href="../matkul/matkul_list.php">Mata Kuliah</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="jadwal_list.php">Jadwal Kuliah</a>
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
    <h2>DATA JADWAL MATA KULIAH</h2>
	<hr>
	<!--table tombol tambah data jadwal-->
	<table class="table align-middle mb-0 bg-white">
		<tr>
			<td> <a href="jadwal_add.php"><button class="btn btn-primary"> + Tambah Data Jadwal Mata Kuliah </button></a></td>
		</tr>
	</table>
	<!--akhir table tombol tambah data jadwal-->
<br>
<!--table view data jadwal-->
<table class="table align-middle mb-0 bg-white">
	<tr>
		<th>No</th>
		<th>Kode Dosen</th>
		<th>Kode Mata Kuliah</th>
		<th>Ruang</th>
    <th>Waktu</th>
		<th>Aksi</th>
	</tr>
<?php

//menghubungkan dengan koneksi
include "../config/koneksi.php";
//membuat variabel dengan nilai awal 1
$no = 1;

//mengambil data dari tabel jadwal
$sql = mysqli_query($koneksi, "select * from tbl_jadwal");
while ($data = mysqli_fetch_array($sql)){
?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['kd_dosen']; ?></td>
		<td><?php echo $data['kd_mk']; ?></td>
		<td><?php echo $data['ruang']; ?></td>
    <td><?php echo $data['waktu']; ?></td>
		<td>
			<a href="jadwal_edit.php?id=<?php echo $data['id'];?>"><button class="btn btn-warning">Edit</button></a>
			<a href="jadwal_delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Anda yakin ingin menghapus data Jadwal di Ruang <?php echo $data['ruang']; ?> Dengan waktu <?php echo $data['waktu']; ?> ?');"><button class="btn btn-danger">Hapus</button></a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
<!--akhir table view data jadwal-->

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