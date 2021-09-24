<?php 

include '../Controllers/Controller_spp.php';
// membuat objek dari class spp
$spp = new Controller_spp();
$GetSpp = $spp->GetData_All();

//mengecek di objek $spp ada berapa banyak property
//echo var_dump($spp);

 ?>


 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">





 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel spp</h3> <h3><a href="view_post_spp.php"><i class="fa fa-plus-square" style="font-family: arial; font-size:25px; color: blue;"> Tambah Data</i></a></h3>



 		<table border="1" class="table table-striped">
 			<tr>
 				<th class = "normal">NO</th>
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
 							 	<a href="../Views/View_put_spp.php?id_spp=<?php echo base64_encode($Get['id_spp']) ?>"><img src="../img/view-list.svg"></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi(<?php echo $Get['id_spp']; ?>)"><img src="../img/trash.svg" style="background: none;"></button>
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
 					window.location.href='../Config/Routes.php?function=delete_spp&id_spp=<?php echo base64_encode($Get['id_spp']) ?>';
 				};
 			}

 		</script>
