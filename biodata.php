<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="#"><img src="telkom.png"</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="index.php">COVID-19</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="about.php">ABOUT ME</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="check.php">CHECK UP</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="tampil_data.php">PASIEN</a>
		</li>
	</ul>
</div>
</nav>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/b.svg">
		</div>
		<div class="login-content">
			<form class="" action="" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">COVID-19</h2>
        <h4 class="title">isi data diri untuk simpan hasil</h4>
        <br>

           		<div class="input-div one" >
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama lengkap</h5>
           		   		<input type="text" name="nama" class="input" >
           		   </div>
           		</div>
              <div class="input-div one" >
           		   <div class="i">
           		   	<i class="fas fa-underline"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usia</h5>
           		   		<input type="text" name="usia" class="input">
           		   </div>
           		</div>
              <div class="input-div one" >
           		   <div class="i">
           		   	<i class="fas fa-venus-mars"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>kelamin</h5>
           		   		<input type="text" name="kelamin" class="input">
           		   </div>
           		</div>
              <div class="input-div one" >
           		   <div class="i">
           		   	<i class="fas fa-home"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Alamat</h5>
           		   		<input type="text" name="alamat" class="input">
           		   </div>
           		</div>
              <div class="input-div one" >
           		   <div class="i">
           		   		<i class="fas fa-phone-alt"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>No telp</h5>
           		   		<input type="text" name="telp" class="input">
           		   </div>
           		</div>

            	<input type="submit" name="simpan" class="btn" value="simpan">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php
    include 'config.php';
    if(@$_POST['simpan']){
      $nama = @$_POST['nama'];
      $usia = @$_POST['usia'];
      $kelamin = @$_POST['kelamin'];
      $alamat = @$_POST['alamat'];
      $telp = @$_POST['telp'];

      $query = mysqli_query($koneksi, "INSERT INTO `user` (nama,usia,kelamin,alamat,telp,status)
                    VALUES ('$nama', '$usia', '$kelamin', '$alamat', '$telp', 'aman')");
      if($query){
        session_start();
        $_SESSION['nama'] = $nama;
        header("Location: berhasil.php");
      }else{
        echo "data gagal di input";
      }
    }
   ?>
