<?php
include 'fungsi.php';


$user = $_POST['user'];
$pass = $_POST['pass'];


$query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
$cek = mysqli_query(db(), $query);


if(mysqli_num_rows($cek) > 0){
 
    header("location:dashboard.php");
} else {

    echo "<script>
            alert('Username atau Password salah!');
            window.location='index.php';
          </script>";
}
?>