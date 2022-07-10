<?php
//import file koneksi.php
include "config/koneksi.php";

?>
<html>
<head>
<title>Aplikasi - Masuk</title>
<!-- mengambil data boostrap css online-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- mengambil data boostrap js online-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<?php

//membuat fungsi untuk memeriksa suatu objek dari nilai inputan form
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
	echo "Login gagal! username dan password yang anda masukkan salah!";
	//fungsi untuk pesan logout
	}else if($_GET['pesan'] == "logout"){
	echo "Anda Telah Keluar dari Sistem!";
	//fungsi untuk pesan belum_login
	}else if($_GET['pesan'] == "belum_login"){
	echo "Anda harus login untuk mengakses halaman admin";
	}
}
?>
<!--tampilan box login-->
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="cek_login.php" method="POST">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Silahkan Masukkan Username dan Password</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" name="username" class="form-control form-control-lg" placeholder="Username" required />
                
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="Password" required />
                
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--akhir tampilan box login

<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
	<form method="post" action="cek_login.php">
	<div class="text-center mb-3">
		<div class="form-group has-feedback">
			<div class="form-outline mb-4">
			<input type="text" class="form-control" name="username" placeholder="Masukkan username">
			<label class="form-label" for="loginName">Email or username</label>
		</div>
		<div class="form-outline mb-4">
			<input type="password" class="form-control" name="password" placeholder="Masukkan password">
			<label class="form-label" for="loginName">Password</label>
		</div>
			<input type="submit" class="btn btn-primary btn-block mb-4" name="Masuk" value="Masuk">
		</div>
	</form>
	</div>
</div> -->
<!--akhir form login-->
</body>
</html>