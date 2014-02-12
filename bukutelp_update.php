<?php
 include "connect_db.php";

 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $telp = $_POST['telp'];
 $email = $_POST['email'];
 $id = $_POST['id'];

 $sql = "UPDATE buku_telp SET nama='$nama', 
 				alamat='$alamat', 
 				telp='$telp', 
 				email='$email'
				WHERE id='$id'";

 $result = $mysqli->query($sql);

 if ($result){
 	echo "Sukses menyimpan data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
 } else {
 	echo "Terjadi kesalahan";
 }

 $mysqli->close(); 
?>
