<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$namamahasiswa = $_POST['namamahasiswa'];
	$jammasuk = $_POST['jammasuk'];
	$jamkeluar = $_POST['jamkeluar'];
	$tanggalkehadiran = $_POST['tanggalkehadiran'];
	$status = $_POST['status'];



}

$save = "INSERT INTO tb_kehadiran SET nobp='$nobp', namamahasiswa='$namamahasiswa', jammasuk='$jammasuk',jamkeluar='$jamkeluar', status='$status',";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
	 echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>