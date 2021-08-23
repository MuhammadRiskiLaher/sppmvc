<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_petugas" method="POST">
 	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>ID PETUGAS</td>
 			<td><input type="text" name="id_petugas"></td>
 		</tr>
 		<tr>
 			<td>USERNAME</td>
 			<td><input type="text" name="username"></td>
 		</tr>
 		<tr>
 			<td>PASSWORD</td>
 			<td><input type="text" name="password"></td>
 		</tr>

    <tr>
      <td>NAMA PETUGAS</td>
      <td><input type="text" name="nama_petugas"></td>
    </tr>

 		<tr>
  			<td>LEVEL</td>
  			<td>
  				<select name="level">
  					<!--logic combo get database-->


  					<option value= "administrator">ADMINISTRATOR</option>
  					<option value= "petugas">PETUGAS</option>
  				</select>
  			</td>
  		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_petugas"></td>
  		</tr>
 	</table>
 	
 </form>