<?php 

include '../controller/controller_kelas.php';
// membuat objek dari class kelas
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

//mengecek di objek $kelas ada berapa banyak property
//echo var_dump($kelas);

 ?>




 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Kelas</h3> <h3><a href="view_post_kelas.php">ADD DATA</a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID KELAS</th>
 				<th>NAMA KELAS</th>
 				<th>KOMPETENSI KEAHLIAN</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetKelas)) {
 					$no = 1;
 					foreach ($GetKelas as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_kelas']; ?></td>
 							<td><?php echo $Get['nama_kelas']; ?></td>
 							<td><?php echo $Get['kompetensi_keahlian']; ?></td>
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="../views/view_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">VIEW | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_kelas']; ?>)">DELETE</button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_kelas) {
 				var a = id_kelas;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_kelas&id_kelas=' + a;
 				};
 			}

 		</script>