<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_spp" method="POST">
 	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr style="display: none">
 			<td>ID SPP</td>
 			<td><input type="text" name="id_spp"></td>
 		</tr>
 		<tr>
 			<td>TAHUN</td>
 			<td><input type="text" name="tahun"></td>
 		</tr>
 		<tr>
 			<td>NOMINAL</td>
 			<td><input type="text" name="nominal"></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_spp"></td>
  		</tr>
 	</table>
 	
 </form>