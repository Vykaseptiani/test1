<!DOCTYPE html>
<html>
<head>
	<title>EDIT MATA KULIAH</title>
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
            <a class="nav-link" href="../admin_dashboard.php">Beranda</a>
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
  	<h2>EDIT DATA MATA KULIAH</h2>
  	<hr>

	<?php
	//menghubungkan dengan koneksi
	include '../config/koneksi.php';

	//mengambil kd_dosen dari tabel mata kuliah
	$kd_mk = $_GET['kd_mk'];
	$sqr = mysqli_query($koneksi,"select * from tbl_mk where kd_mk = $kd_mk");
	while ($data = mysqli_fetch_array($sqr)) {
	?>

	<!--form untuk edit data mata kuliah-->
	<form method="post" action="aksi_edit_matkul.php">

	<!--table edit data mata kuliah-->
	<table class="table align-middle mb-0 bg-white">
		<div class="input-group mb-3">
  			<span class="input-group-text" id="basic-addon1">Kode Mata Kuliah</span>
  			<input type="text" name="kd_mk" class="form-control" aria-label="Kode Mata Kuliah" aria-describedby="basic-addon1" value="<?php echo $data['kd_mk']; ?>" readonly/>
		</div>
		<div class="input-group mb-3">
  			<span class="input-group-text" id="basic-addon1">Nama Mata Kuliah</span>
  			<input type="text" name="nm_mk" class="form-control" aria-label="Nama Mata Kuliah" aria-describedby="basic-addon1" value="<?php echo $data['nm_mk']; ?>" required/>
		</div>
		<div class=input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">Jumlah SKS Mata Kuliah</span>
  			<input type="text" name="sks" class="form-control" aria-label="SKS Mata Kuliah" value="<?php echo $data['sks']; ?>" aria-describedby="basic-addon1" required/>
		</div>
			<td><button class="btn btn-success" type="submit">SIMPAN</button>
				<button class="btn btn-danger" type="submit" onclick="window.location.href='matkul_list.php'">BATAL</button>
		</tr>
	</table>
	<!--akhir table edit data mata kuliah-->
	</form>
	<!--akhir form edit data mata kuliah-->
	<?php
	}
	?>
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