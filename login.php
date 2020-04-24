<?php
  include 'config.php';

  $username = ($_POST['username']);
  $password = ($_POST['password']);

  $query = "SELECT * FROM perawat WHERE username = '$username' AND password  = '$password' ";
  $sql = mysqli_query ($koneksi, $query);

  if(mysqli_num_rows($sql)){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: beranda.php");
  }else{
    echo "<h1> Username atau Password Anda Salah !! </h1>";
    echo "<div class='form'>
            <h3>
            <br/> Klik untuk <a href='login_perawat.php'>Login lagi</a>
            </h3>
          </div>";
  }
?>
