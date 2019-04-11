<head>
	<link rel="stylesheet" type="text/css" href="csstyle.css">
</head>
<div class="encapsulation">

<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user_admin WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'><a href='login.php'>Username Belum Terdaftar! tekan di sini untuk kembali</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'><a href='login.php'>Password salah! tekan di sini untuk kembali</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:dashboard/index.php');
     }
   }
?>

</div>