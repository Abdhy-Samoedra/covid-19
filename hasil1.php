<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title>Check Up</title>
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
            margin: 2px;
            width: 95%;
            max-width: 800px;
            background: #fff;
            position: absolute;
            top: 100px;
            left: 100%;
            transform: translate(-50%, -50%);
            padding: 10px 30px;
            box-sizing: border-box;
            border-radius: 2px;
            text-align: center;
            box-shadow: 0 0 4px #376b80;
            font-family: 'Roboto Slab', serif;
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
            width:25%;
        }
        .log-btn{
            background-color: #29a89d;
            width:25%;
        }
        .atau{
            font-size: 15px;
            font-family: 'Rubik', sans-serif;
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand text-white" href="#"><i class="fas fa-book-reader"></i>'CheckUp | Covid-19'</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="cek1.php" class="nav-item nav-link active text-white">CheckUp</a>
                    <a href="../index.php" class="nav-item nav-link active text-white">Beranda</a>
                </div>
            </form>
        </div>
    </nav><br><br><br>
    <h4 style="font-family: Raleway, sans-serif; text-align: center;"><b>Self Check Up COVID-19</b></h4><br><br><br><br> <br><br><br>
    <div class="col-md-6 col-8">
        <div class="panel">
            <hr>
            <h4 style="font-family: 'Montserrat', sans-serif; text-align: center;">Kesimpulan</h4> <br>
            <p style="font-family: 'Lato', sans-serif; font-size: 16px; text-align: center; color: red;">
                Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat atau langsung pergi ke instalasi gawat darurat terdekat.
            </p>
            <button type="button" class="sign-btn" onclick="location.href='mulai.php';">Check Up Lagi</button> <br><br>
            <p style="font-family: 'Lato', sans-serif; font-size: 16px; text-align: center;">
                Terimakasih telah menggunakan tes ini, semoga anda sehat selalu. <br>
                Tetap waspada, tidak perlu panik. <br>
            </p>
            <button type="button" class="log-btn" onclick="location.href='../index.php';">Kembali Ke Beranda</button> <br>
        </div>
    </div>
	<script src="js/main.js"></script>
</body>

</html>