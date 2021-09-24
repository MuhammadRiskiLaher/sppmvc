<?php
//memanggil fungsi CSRF
include('../Config/Csrf.php');

?>

<form action="../Config/Routes.php?function=create_kelas" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr style="display: none">
 			<td>ID KELAS</td>
 			<td><input type="text" name="id_kelas"></td>
 		</tr>
 		<tr>
 			<td>NAMA KELAS</td>
 			<td><input type="text" name="nama_kelas"></td>
 		</tr>
 		<tr>
 			<td>KOMPETENSI KEAHLIAN</td>
 			<td><input type="text" name="kompetensi_keahlian"></td>
 		</tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="Buat Kelas"></td>
  		</tr>
 	</table>
 	
 </form>