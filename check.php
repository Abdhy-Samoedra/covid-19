

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
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
        .welcome{
            color: #376b80;
            font-size: 35pt;
            font-weight: 900;
            text-align: center;
        }
        .navbar{
            background-color: #376b80;
            color: #fff;
        }
        .panel{
            width: 95%;
            max-width: 600px;
            background: #fff;
            top: 100px;
            left: 100%;
            transform: translate(-50%, -50%);
            padding: 40px 30px;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 4px #376b80;
            margin-left: 100%;
            margin-right: 100%;
        }
        img{
            width: 140px;
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
            background-color: #1c8adb;
        }
        .log-btn{
            background-color: #29a89d;
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
          height: 30px;
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
      <a class="nav-link" href="check.php">CHECK UP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_data.php">PASIEN</a>
    </li>
  </ul>
  </div>
  </nav>
  <br>


    <h1 class="welcome">Halo, Mokleters</h1>
    <h3 style=" text-align: center;">Ayo cek kesehatan untuk mencegah COVID-19!</h3><br><br><br><br><br><br><br><br><br><br><br>
<div class="col-md-6 col-11">
    <div class="panel text-align: center;">
        <img src="perisai.jpg">
        <hr>
        <p>
        Aplikasi ini berisikan beberapa daftar pertanyaan <br>
        untuk mengecek kondisi fisik Anda <br>
        </p>
        <button type="button" class="sign-btn" onclick="location.href='cek1.php';">Ketuk Untuk Melanjutkan</button> <br>
        <p class="atau">Atau</p>
        <button type="button" class="log-btn" onclick="location.href='index.php';">Kembali Ke Beranda</button> <br>
    </div>
</div>
	<script src="js/main.js"></script>
</body>

</html>
