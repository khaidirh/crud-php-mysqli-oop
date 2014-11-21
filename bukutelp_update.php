<?php
 include "connect_db.php";

<<<<<<< HEAD
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
=======
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
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
 }

 $mysqli->close(); 
?>
