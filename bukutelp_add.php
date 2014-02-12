<?php
 include "connect_db.php";

 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $telp = $_POST['telp'];
 $email = $_POST['email'];

 $sql = "INSERT INTO buku_telp (nama, alamat, email, telp)
 		 VALUES ('$nama', '$alamat', '$email', '$telp')";
 $result = $mysqli->query($sql);

 if ($result){
 	echo "Sukses menyimpan data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
 } else {
 	echo "Terjadi kesalahan";
 }
 
 $mysqli->close();

?>