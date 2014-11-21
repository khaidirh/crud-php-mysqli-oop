<?php
 include "connect_db.php";

<<<<<<< HEAD
 $sql = "DELETE FROM buku_telp WHERE id=?";
 $result = $mysqli->query($sql);

 // prepare the sql statement
 if($stmt = $mysqli->prepare($sql)){
    // bind the id of the record to be deleted
    // we use "i" here for integer
    $stmt->bind_param("i", $_GET['id']);

    // execute the delete statement
    if($stmt->execute()){
  		echo "Sukses menghapus data <br />
 		  		<a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
        // close the prepared statement
        $stmt->close();

    }else{
        die("Gagal menghapus data.");
    }

 }
 
=======
 $id = $_GET['id'];
 $sql = "DELETE FROM buku_telp WHERE id='$id'";
 $result = $mysqli->query($sql);

 if ($result){
 	echo "Sukses menghapus data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
 } else {
 	echo "Terjadi kesalahan";
 }

>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
 $mysqli->close();
?>
