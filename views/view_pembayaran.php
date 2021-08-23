<?php 

include '../controller/controller_pembayaran.php';
// membuat objek dari class siswa
$pembayaran = new controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

//mengecek di objek $pembayaran ada berapa banyak property
//echo var_dump($pembayaran);

 ?>




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Pembayaran</h3> <h3><a href="view_post_pembayaran.php">ADD DATA</a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID PEMBAYARAN</th>
 				<th>NAMA PETUGAS</th>
 				<th>NISN</th>
 				<th>TANGGAL</th>
 				<th>BULAN</th>
 				<th>TAHUN</th>
 				<th>NOMINAL</th>
 				<th>JUMLAH BAYAR</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetPembayaran)) {
 					$no = 1;
 					foreach ($GetPembayaran as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_pembayaran']; ?></td>
 							<td><?php echo $Get['nama_petugas']; ?></td>
 							<td><?php echo $Get['nisn']; ?></td>
 							<td><?php echo $Get['tgl_bayar']; ?></td>
 							<td><?php echo $Get['bulan_dibayar']; ?></td>
 							<td><?php echo $Get['tahun_dibayar']; ?></td>
 							<td><?php echo $Get['nominal']; ?></td>
 							<td><?php echo $Get['jumlah_bayar']; ?></td>


 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="../views/view_put_pembayaran.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">VIEW | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_pembayaran']; ?>)">DELETE</button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_pembayaran) {
 				var a = id_pembayaran;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_pembayaran&id_pembayaran=' + a;
 				};
 			}

 		</script>