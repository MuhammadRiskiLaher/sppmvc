<?php 

include '../controller/controller_spp.php';
// membuat objek dari class spp
$spp = new controller_spp();
$GetSpp = $spp->GetData_All();

//mengecek di objek $spp ada berapa banyak property
//echo var_dump($spp);

 ?>




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel spp</h3> <h3><a href="view_post_spp.php">ADD DATA</a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID SPP</th>
 				<th>TAHUN</th>
 				<th>NOMINAL</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetSpp)) {
 					$no = 1;
 					foreach ($GetSpp as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_spp']; ?></td>
 							<td><?php echo $Get['tahun']; ?></td>
 							<td><?php echo $Get['nominal']; ?></td>
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="../views/view_put_spp.php?id_spp=<?php echo $Get['id_spp'] ?>">VIEW | </a>
 							
 							 	<button onclick="return konfirmasi(<?php echo $Get['id_spp']; ?>)">DELETE</button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_spp) {
 				var a = id_spp;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_spp&id_spp=' + a;
 				};
 			}

 		</script>
