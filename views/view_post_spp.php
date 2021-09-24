<?php 
	//memanggil fungsi CSRF
	include('../Config/Csrf.php');

 ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

 <form action="../Config/Routes.php?function=create_spp" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1" >
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
  			<td colspan="2" align="right"><input type="submit" name="proses" value="Tambah SPP"></td>
  		</tr>
 	</table>
 	
 </form>