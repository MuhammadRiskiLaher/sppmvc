<?php

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $kelas ada berapa banyak Property
//echo var_dump($kelas);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Kelas</h3>
<h3><a href="View_post_kelas.php">Add Data</a></h3>

 
<table border="1" class="table table-striped">
    <tr>
        <th>NO</th>
        <th>ID KELAS</th>
        <th>NAMA KELAS</th>
        <th>KOMPETENSI KEAHLIAN</th>
        <th>TINDAKAN</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetKelas)) {
        $no = 1;
        foreach ($GetKelas as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['id_kelas']; ?></td>
                <td><?php echo $Get['nama_kelas']; ?></td>
                <td><?php echo $Get['kompetensi_keahlian']; ?></td>

                <!-- UNTUK TINDAKAN -->
                <td>
                    <button> <a href="../Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>"><img src="../img/view-list.svg" width =" 50px" heigth = "20px"></a></button>
                    <button onclick="konfirmasi(<?php echo $Get['id_kelas']; ?>)"><img src="../img/trash.svg" width =" 50px" heigth = "20px"> </button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>

<script>
    	function konfirmasi(id_kelas) {
 				
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>';
 				};
 			}
</script>