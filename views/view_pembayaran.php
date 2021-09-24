<?php 

include '../Controllers/Controller_pembayaran.php';
// membuat objek dari class siswa
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

//mengecek di objek $pembayaran ada berapa banyak property
//echo var_dump($pembayaran);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 		<link rel="stylesheet" type="text/css" href="../assets/navbar.css">





 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Pembayaran</h3> <h3><a href="View_post_pembayaran.php"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



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
 							 	<a href="../Views/View_put_pembayaran.php?id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_pembayaran']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_pembayaran) {
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_pembayaran&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>';
 				};
 			}

 		</script>