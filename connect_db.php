<?php
//variabel koneksi mysql server
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "latihan_php"; 

//konek ke mysql server
$mysqli = new mysqli($hostname, $username, $password, $database);

//mengecek jika terjadi gagal koneksi
if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database. ";
    exit;
}
?>