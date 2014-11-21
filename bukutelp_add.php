<?php
 include "connect_db.php";

<<<<<<< HEAD
 $sql = "INSERT INTO buku_telp (nama, alamat, email, telp)
 		 VALUES (?,?,?,?)";

 // if the statement was prepared
 if($stmt = $mysqli->prepare($sql)){
	 /*
	 * bind the values,
	 * "ssss" means 4 string were being binded,
	 * aside from s for string, you can also use:
	 * i for integer
	 * d for decimal
	 * b for blob
	 */
	 $stmt->bind_param("ssss",
	 				    $_POST['nama'],
	 				    $_POST['alamat'],
	 				    $_POST['telp'],
	 				    $_POST['email']);

	 // execute the insert query
	 if ($stmt->execute()){
	 	echo "Sukses menyimpan data <br />
	 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
	 	$stmt->close();
	 } else {
	 	die("Gagal menyimpan data.");
	 }
  
  } else {
  	die("Gagal prepare statement.");
  }
 
 // close the database
 $mysqli->close();
=======
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

>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
?>