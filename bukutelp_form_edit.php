<?php
 include "connect_db.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM buku_telp WHERE id='$id'";
 $result = $mysqli->query($sql);
 $row=$result->fetch_assoc(); 
<<<<<<< HEAD
 extract($row);
 $result->free();
 $mysqli->close();
=======
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
?>
<h2>Buku Telepon</h2>

<h3>Form Edit</h3>
<form method="post" action="bukutelp_update.php">
<input type="hidden" 
       name="id" 
<<<<<<< HEAD
       value="<?php echo $id; ?>">
=======
       value="<?php echo $row['id']; ?>">
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
<table>
 <tr>
 	<td>Nama</td>
 	<td><input type="text" 
             name="nama" 
<<<<<<< HEAD
             value="<?php echo $nama; ?>" /></td>
=======
             value="<?php echo $row['nama']; ?>" /></td>
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
  </tr>
  <tr>
	<td>Alamat</td>
	<td><input type="text" 
             name="alamat" 
<<<<<<< HEAD
             value="<?php echo $alamat; ?>" /></td>
=======
             value="<?php echo $row['alamat']; ?>" /></td>
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
  </tr>
  <tr>
  	<td>Telepon</td>
  	<td><input type="text" 
               name="telp" 
<<<<<<< HEAD
               value="<?php echo $telp; ?>" /></td>
=======
               value="<?php echo $row['telp']; ?>" /></td>
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
  </tr>
  <tr>
  	<td>Email</td>
  	<td><input type="text" 
               name="email" 
<<<<<<< HEAD
               value="<?php echo $email; ?>" /></td>
=======
               value="<?php echo $row['email']; ?>" /></td>
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
  </tr>
  <tr>
	<td colspan="2"><input type="submit" value="Simpan"></td>
  </tr>
</table>	
<<<<<<< HEAD
</form>
=======
</form>

<?php 
 $result->free();
 $mysqli->close();
?>
>>>>>>> 890dff3d9321baf7b6deb4ff358a9c4dd71d6d50
