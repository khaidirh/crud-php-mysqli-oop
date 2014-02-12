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
  echo "<tr>
  	     <td>".$i."</td>
	       <td>".$row['nama']."</td>
  	     <td>".$row['alamat']."</td>
  	     <td>".$row['telp']."</td>
  	     <td>".$row['email']."</td>
	       <td><a href=\"bukutelp_form_edit.php?id=".$row['id']."\">Edit</a> 
	           <a href=\"bukutelp_delete.php?id=".$row['id']."\">Delete</a></td>
 	      </tr>";
  $i++;
 }

 $mysqli->close();
?>  
</table>