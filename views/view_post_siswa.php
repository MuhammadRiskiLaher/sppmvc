<?php 
	//memanggil fungsi CSRF
	include('../Config/Csrf.php');

 ?>

 <form action="../Config/Routes.php?function=create_siswa" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>NISN</td>
 			<td><input type="text" name="nisn"></td>
 		</tr>
 		<tr>
 			<td>NIS</td>
 			<td><input type="text" name="nis"></td>
 		</tr>
 		<tr>
 			<td>nama</td>
 			<td><input type="text" name="nama"></td>
 		</tr>

 		<tr>
  			<td>KELAS</td>
  			<td>
  				<select name="id_kelas">
  					<!-- logic combo get database-->

  					
  					<!--logic combo get database-->


  					<option value= "1">RPL</option>
  					<option value= "2">TKJ</option>
  				</select>
  			</td>
  		</tr>

 		<tr>
 			<td>alamat</td>
 			<td><input type="text" name="alamat"></td>
 		</tr>

 		<tr>
 			<td>NO TELEPON</td>
 			<td><input type="text" name="no_telp"></td>
 		</tr>

 		<tr>
 			<td>SPP</td>
 			<td><input type="text" name="id_spp"></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_siswa"></td>
  		</tr>
 	</table>
 	
 </form>