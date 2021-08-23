<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_pembayaran" method="POST">
 	<input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			<td>ID PEMBAYARAN</td>
 			<td><input type="text" name="id_pembayaran"></td>
 		</tr>
 		<tr>
        <td>ID PETUGAS</td>
        <td>
          <select name="id_petugas">
            <option value= "2">RIZKI</option>
            <option value= "3">GATAU</option>
          </select>
        </td>
      </tr>
 		<tr>
 			<td>NISN</td>
 			<td><input type="text" name="nisn"></td>
 		</tr>

 		<tr>
  		<td>TANGGAL BAYAR</td>
      <td><input type="text" name="tgl_bayar"></td>
  		</tr>

 		<tr>
 			<td>BULAN DIBAYAR</td>
 			<td><input type="text" name="bulan_dibayar"></td>
 		</tr>

 		<tr>
 			<td>TAHUN DIBAYAR</td>
 			<td><input type="text" name="tahun_dibayar"></td>
 		</tr>

 		<tr>
 			<td>SPP</td>
 			<td><input type="text" name="id_spp"></td>
 		</tr>

    <tr>
      <td>JUMLAH DIBAYAR</td>
      <td><input type="text" name="jumlah_bayar"></td>
    </tr>

 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_pembayaran"></td>
  		</tr>
 	</table>
 	
 </form>