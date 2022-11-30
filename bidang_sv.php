<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$bidang = $_POST['bidang'];

}

$save = "INSERT INTO tb_bidang SET bidang='$bidang'";
mysqli_query($koneksi, $save);

if ($save) {
	header("location: datajabatan.php");
}else{
	echo "gagal disimpan";
}

 ?>