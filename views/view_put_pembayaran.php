<?php 

  //memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_pembayaran.php';

//membuat objek dari class pembayaran
$pembayaran = new controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_Where($_GET['id_pembayaran']);
 ?>

 <?php 

  foreach ($GetPembayaran as $Get) {

  ?>

  <form action="../config/routes.php?function=put_pembayaran" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
    <table border="1">
      <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
      <tr>
        <td>ID PETUGAS</td>
        <td><input type="text" name="id_petugas" value="<?php echo $Get['id_petugas'] ?>"></td>
      </tr>

      <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn" value="<?php echo $Get['nisn'] ?>"></td>
      </tr>

       <tr>
        <td>TANGGAL DIBAYAR</td>
        <td><input type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar'] ?>"></td>
      </tr>

      <tr>
        <td>TANGGAL DIBAYAR</td>
        <td><input type="text" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar'] ?>"></td>
      </tr>

      <tr>
        <td>TAHUN DIBAYAR</td>
        <td><input type="text" name="tahun_dibayar" value="<?php echo $Get['tahun_dibayar'] ?>"></td>
      </tr>

      <tr>
        <td>NOMINAL SPP</td>
        <td>
        <select name="id_spp">

          <!-- Logic combo Get database -->
          <option value="<?php echo $Get['id_spp']; ?>">
          <?php
            if($Get['id_spp']=="1"){
              echo "250000";
            } else if ($Get['id_spp']=="2") {
              echo "300000";
            } elseif ($Get['id_spp']=="3") {
              echo "400000";
            } else {
              echo "450000";
            }
          ?>
          </option>
          <!-- Logic combo Get database -->

          <option value="1">250000</option>
          <option value="2">300000</option>
          <option value="3">400000</option>
          </select>
        </td>
      </tr>

      <td>JUMLAH BAYAR</td>
        <td><input type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar'] ?>"></td>
      </tr>

      <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
    </table>
  </form>

  <?php } ?>