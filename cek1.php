<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
        body{
            margin: 0;
            padding: 0;
            background: #fff;
            background-size: cover;
        }
        .panel{
            width: 95%;
            max-width: 800px;
            background: #fff;
            top: 100px;
            left: 100%;
            transform: translate(-50%, -50%);
            padding: 40px 30px;
            box-sizing: border-box;
            text-align: center;
            box-shadow: 0 0 4px #376b80;
            margin-left: 100%;
            margin-right: 100%;
        }
        button{
            color: #fff;
            width: 60%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
        }
        .sign-btn{
            background-color: #f20726;
            width:25%;
        }
        .log-btn{
            background-color: #1c8adb;
            width:25%;
        }
        .atau{
            font-size: 15px;
            font-family: 'Rubik', sans-serif;
        }
        #nav-bar
        {
        position: sticky;
        top: 0;
        z-index: 10;
        }
        .navbar-brand img
        {
          height: 40px;
          padding-left: 30px;
        }
        .navbar-nav li
        {
          padding: 0 10px;
        }
        .navbar-nav li a
        {
          float: right;
          text-align: left;
        }
        #nav-bar ul li a:hover
        {
          color: #007bff!important;
        }
        .navbar
        {
          background: #29a89d;
        }
        .navbar-toggler
        {
          border: none!important;
        }
        .nav-link
        {
          color: #555!important;
          font-weight: 600px;
          font-size: 20px;
        }
    </style>

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
			<a class="nav-link" href="biodata.php">CHECK UP</a>
		</li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_data.php">PASIEN</a>
    </li>
	</ul>
</div>
</nav>
  <br>
    <h1 style=text-align:center;><b>Self Check Up COVID-19</b></h1><br><br><br><br><br><br><br>
    <br><br><br><br>
    <div class="col-md-6 col-11">
        <div class="panel">
            <h4 style=text-align:left;>1. Apakah Anda mengalami salah satu dari berikut:</h4>
            <ul style="text-align: left;">
                <li>
                    <h4>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</h4>
                </li>
                <li>
                    <h4>Nyeri dada yang parah</h4>
                </li>
                <li>
                    <h4>Sulit untuk bangun</h4>
                </li>
                <li>
                    <h4>Merasa kebingungan</h4>
                </li>
                <li>
                    <h4>Penurunan kesadaran</h4>
                </li>
            </ul>
            <button type="button" class="sign-btn" onclick="location.href='hasil2.php';">Ya</button>
            <h4 class="atau">Atau</h4>
            <button type="button" class="log-btn" onclick="location.href='cek2.php';">Tidak</button> <br>
        </div>
    </div>
	<script src="js/main.js"></script>
</body>

</html>
