<!DOCTYPE html>
<html>
<head>
	<title>FORM TAMBAH JADWAL MATA KULIAH</title>
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
            <a class="nav-link"  href="../dosen/dosen_list.php">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../matkul/matkul_list.php">Mata Kuliah</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link"  aria-current="page" href="jadwal_list.php">Jadwal Kuliah</a>
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
  	<h2>TAMBAH DATA JADWAL MATA KULIAH</h2>
  	<hr>
    <!--form untuk tambah data jadwal-->
	<form method="post" action="aksi_add_jadwal.php">
  <?php  

  //menghubungkan dengan koneksi
  include '../config/koneksi.php';
  // fungsi untuk membuat id transaksi
  $query_id = mysqli_query($koneksi, "SELECT RIGHT(id,3) as kode FROM tbl_jadwal ORDER BY id DESC LIMIT 1")
              or die('Ada kesalahan pada query tampil id : '.mysqli_error($koneksi));

  $count = mysqli_num_rows($query_id);

  if ($count <> 0) {
  // mengambil data id
  $data_id = mysqli_fetch_assoc($query_id);
  $kode    = $data_id['kode']+1;
  } else {
  $kode = 1;
  }

  // buat id
  $buat_id   = str_pad($kode, 3, "0", STR_PAD_LEFT);
  $id = "0$buat_id";
  ?>  
	<!--table tambah data jadwal-->
	<table class="table align-middle mb-0 bg-white">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ID Jadwal</span>
        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" aria-label="ID" aria-describedby="basic-addon1" readonly required/>
    </div>
		<div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Kode Dosen</span>
  			<select id="kd_dosen" class="form-control" name="kd_dosen" onchange="clearAndAdd()" required>
        <?php
        include '../koneksi.php';
        //mengambil data kd_dosen dan nm_dosen dari tbl_dosen
        $select = "SELECT kd_dosen, nm_dosen FROM tbl_dosen";
        $getData = mysqli_query($koneksi,$select); 
         while($data1 = mysqli_fetch_array($getData))
         {?>
         <option value="<?php echo $data1['kd_dosen'];?>"><?php echo $data1['kd_dosen'];?> - <?php echo $data1['nm_dosen'];?></option>
         <?php
         }?>
        </select>
		</div>
		<div class="input-group mb-3">
  		<span class="input-group-text" id="basic-addon1">Kode Mata Kuliah</span>
  			<select id="kd_mk" class="form-control" name="kd_mk" onchange="clearAndAdd()" required>
        <?php

        //mengambil data kd_mk dan nm_mk dari tbl_mk                      
        $select1 = "SELECT kd_mk, nm_mk FROM tbl_mk";
        $getData1 = mysqli_query($koneksi,$select1);
        while($data2 = mysqli_fetch_array($getData1))
        {?>
        <option value="<?php echo $data2['kd_mk'];?>"><?php echo $data2['kd_mk'];?> - <?php echo $data2['nm_mk'];?></option>
        <?php
        }?>
        </select>
		</div>
		<div class="input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">Ruang</span>
  			<input type="text" name="ruang" class="form-control" aria-label="Ruang" aria-describedby="basic-addon1" required/>
		</div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Waktu</span>
        <input type="datetime-local" name="waktu" class="form-control" aria-label="Waktu" aria-describedby="basic-addon1" required/>
    </div>
			<td><button class="btn btn-success" type="submit">SIMPAN</button>
				<button class="btn btn-danger" type="submit" onclick="window.location.href='jadwal_list.php'">BATAL</button>
		</tr>
	</table>
	<!--akhir table tambah data jadwal-->
	</form>
<!--akhir form tambah data jadwal-->
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