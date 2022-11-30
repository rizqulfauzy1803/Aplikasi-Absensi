<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql_h = "DELETE FROM tb_bidang WHERE id = '$id' ";
$hapus = mysqli_query($koneksi, $sql_h);

if ($hapus) {
         
         header("location: datajabatan.php");
} else {
  echo "Gagal Dihapus";
}

 ?>

