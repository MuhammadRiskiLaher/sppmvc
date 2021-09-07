<?php

include '../controller/controller_siswa.php';
// membuat objek dari class siswa
$siswa = new controller_siswa();
$GetSiswa = $siswa->GetData_All();

//mengecek di objek $siswa ada berapa banyak property
//echo var_dump($siswa);

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" type="text/css" href="../assets/navbar.css">


<!-- CSS BOOSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="container-fluid">
		<span class="navbar-brand mb-0 h1 fs-2 text-white">SppLahers</span>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav text-white">

				<li class="nav-item">
					<a class="nav-link text-white" href="view_siswa.php">Siswa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="view_pembayaran.php">Pembayaran</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white" href="view_petugas.php">Petugas</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white" href="view_kelas.php">Kelas</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white" href="view_spp.php">Spp</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<br>
<br>
<h3 style="margin-left: 25px;">Tabel Siswa</h3>
<h3 style="margin-left: 25px;"><a href=" view_post_siswa.php" class="text-dark"> TAMBAH DATA</a></h3>


<table border="1" class="table table-stripped table-warning">
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
				<!-- TUGAS PERTEMUAN KE 7 -->
				<!-- //untuk tindakan -->
				<td>
					<!-- TUGAS PERTEMUAN 7 MENAMBAH ICON MENGGUNAKAN IMAGE SAJA :V -->
					<button style="background: none;"><a href=" ../views/view_put_siswa.php?nisn=<?php echo base64_encode($Get['id_pembayaran']) ?>"> <img src="../img/view-list.svg" height="30px" width="30px"></button>
					</a>
					<a> | </a>

					<button onclick=" konfirmasi(<?php echo $Get['nisn']; ?>)" style="background: none;"><img src="../img/trash.svg" height="30px" width="30px"></button>
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
			window.location.href = '../config/routes.php?function=delete_siswa&nisn=<?php echo base64_encode($Get['nisn']) ?>';
		};
	}
</script>