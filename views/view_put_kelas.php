<?php

//memanggil fungsi dari CSRF
include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';

//membuat objek dari class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_Where($_GET['id_kelas']);

?>




<?php

foreach ($GetKelas as $Get) {

?>

    <form action="../Config/Routes.php?function=put_kelas" method="POST">
        <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
        <table border="1">
            <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
            <tr>
                <td>NAMA KELAS</td>
                <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas'] ?>"></td>
            </tr>

            <tr>
                <td>KOMPETENSI KEAHLIAN</td>
                <td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian'] ?>"></td>
            </tr>


            <tr>
                <td><a href="http://localhost:8080/tugasspp/Views/View_kelas.php">back</a></td>
                <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
            </tr>
        </table>
    </form>

<?php } ?>