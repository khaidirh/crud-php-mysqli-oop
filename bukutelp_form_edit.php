<?php
 include "connect_db.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM buku_telp WHERE id='$id'";
 $result = $mysqli->query($sql);
 $row=$result->fetch_assoc(); 
?>
<h2>Buku Telepon</h2>

<h3>Form Edit</h3>
<form method="post" action="bukutelp_update.php">
<input type="hidden" 
       name="id" 
       value="<?php echo $row['id']; ?>">
<table>
 <tr>
 	<td>Nama</td>
 	<td><input type="text" 
             name="nama" 
             value="<?php echo $row['nama']; ?>" /></td>
  </tr>
  <tr>
	<td>Alamat</td>
	<td><input type="text" 
             name="alamat" 
             value="<?php echo $row['alamat']; ?>" /></td>
  </tr>
  <tr>
  	<td>Telepon</td>
  	<td><input type="text" 
               name="telp" 
               value="<?php echo $row['telp']; ?>" /></td>
  </tr>
  <tr>
  	<td>Email</td>
  	<td><input type="text" 
               name="email" 
               value="<?php echo $row['email']; ?>" /></td>
  </tr>
  <tr>
	<td colspan="2"><input type="submit" value="Simpan"></td>
  </tr>
</table>	
</form>

<?php 
 $result->free();
 $mysqli->close();
?>