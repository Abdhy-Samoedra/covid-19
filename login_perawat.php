<!DOCTYPE html>
<html>
<head>
	<title>FORM PERAWAT</title>
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
    <li class="nav-item">
			<a class="nav-link" href="login_perawat.php">PERAWAT</a>
		</li>
	</ul>
</div>
</nav>
	<img class="wave" src="we.png">
	<div class="container">
		<div class="img">
			<img src="img/prwt.svg">
		</div>
		<div class="login-content">
			<form class="" action="login.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">PERAWAT</h2>
        <h4 class="title">Login untuk perawat yang terdaftar</h4>
        <br>

           		<div class="input-div one" >
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" >
           		   </div>
           		</div>
              <div class="input-div one" >
           		   <div class="i">
           		   	<i class="fas fa-underline"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input type="text" name="password" class="input">
           		   </div>
           		</div>
              <input type="submit" name="simpan" class="btn" value="login">
							<a href="register.php" class="btn">Daftar</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
