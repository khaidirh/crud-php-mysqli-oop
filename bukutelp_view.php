<h2>Buku Telepon</h2>

<h3>Daftar Nama</h3>
<a href="bukutelp_form_input.php">Tambah</a> | <a href="bukutelp_search.php">Cari</a>
<table border="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Telp</th>
  <th>Email</th>
  <th></th>
 </tr>

<?php
 include "connect_db.php";
 $sql = "SELECT * FROM buku_telp";
 $result = $mysqli->query($sql);
 $i=1;
 while($row=$result->fetch_assoc()){
  //extract row
  //this will make $row['firstname'] to just $firstname only
  extract($row);  
  echo "<tr>
  	     <td>".$i."</td>
	       <td>{$nama}</td>
  	     <td>{$alamat}</td>
  	     <td>{$telp}</td>
  	     <td>{$email}</td>
	       <td><a href=\"bukutelp_form_edit.php?id={$id}\">Edit</a> 
	           <a href=\"bukutelp_delete.php?id={$id}\">Delete</a></td>
 	      </tr>";
  $i++;
 }
 $result->free();
 $mysqli->close();
?>  
</table>