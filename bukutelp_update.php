<?php
 include "connect_db.php";

 $sql = "UPDATE buku_telp SET nama=?, 
 				alamat=?, 
 				telp=?, 
 				email=?
				WHERE id=?";

 $stmt = $mysqli->prepare($sql);
 $stmt->bind_param(
        'ssssi',
        $_POST['nama'],
        $_POST['alamat'],
        $_POST['telp'],
        $_POST['email'],
        $_POST['id']
 );

 if ($stmt->execute()){
 	echo "Sukses menyimpan data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
 	$stmt->close();
 } else {
 	die("Gagal update data.");
 }

 $mysqli->close(); 
?>
