<?php
//variabel koneksi mysql server
$hostname = "localhost";
$username = "root";
<<<<<<< HEAD
$password = "root";
=======
$password = "";
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
$database = "latihan_php"; 

//konek ke mysql server
$mysqli = new mysqli($hostname, $username, $password, $database);

//mengecek jika terjadi gagal koneksi
if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database. ";
    exit;
}
?>