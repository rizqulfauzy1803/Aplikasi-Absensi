<?php 
include 'koneksi.php';
session_start();

$id = $_GET['id_karyawan'];
$sql = "SELECT *  FROM tb_mahasiswa WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);
$hapus_f = mysqli_fetch_array($query);

//proses hapus gambar
$file = "images/".$hapus_f['suratpernyataan'];
unlink($file);

$sql_h = "DELETE FROM tb_mahasiswa WHERE id = '$id' ";
$hapus = mysqli_query($koneksi, $sql_h);

if ($hapus) {
         
         header("location: datakaryawan.php");
} else {
  echo "Gagal Dihapus";
}

 ?>

