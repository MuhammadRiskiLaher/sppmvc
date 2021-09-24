<?php 

include '../Controllers/Controller_siswa.php';
// membuat objek dari class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetData_All();

//mengecek di objek $siswa ada berapa banyak property
//echo var_dump($siswa);

 ?>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Siswa</h3> <h3><a href="View_post_siswa.php"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>NISN</th>
 				<th>NIS</th>
 				<th>NAMA</th>
 				<th>KELAS</th>
 				<th>ALAMAT</th>
 				<th>NO TELEPON</th>
 				<th>NOMINAL</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetSiswa)) {
 					$no = 1;
 					foreach ($GetSiswa as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['nisn']; ?></td>
 							<td><?php echo $Get['nis']; ?></td>
 							<td><?php echo $Get['nama']; ?></td>
 							<td><?php echo $Get['nama_kelas']; ?></td>
 							
 							 <td><?php echo $Get['alamat']; ?></td>

 							 <td><?php echo $Get['no_telp']; ?></td>
 							 <td><?php echo $Get['nominal']; ?></td>

 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="../Views/View_put_siswa.php?nisn=<?php echo base64_encode($Get['nisn']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['nisn']; ?>)"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(nisn) {
 				
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../Config/Routes.php?function=delete_siswa&nisn=<?php echo base64_encode($Get['nisn']) ?>';
 				};
 			}

 		</script>