<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id = $_POST['id'];
	$nobp = $_POST['nobp'];
	$username=$_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email'];
	$suratpernyataan = $_POST['suratpernyataan'];
	$universitas = $_POST['universitas'];
	$jurusan = $_POST['jurusan'];
	$prodi = $_POST['prodi'];
	$bidang = $_POST['bidang'];
	$tanggalmasuk = $_POST['tanggalmasuk'];
	$lamapkl = $_POST['lamapkl'];
	$tanggalselesai = $_POST['tanggalselesai'];


	//untuk gambar
	$suratpernyataan     = $_FILES['suratpernyataan']['nama'];
	$tmp      = $_FILES['suratpernyataan']['tmp_name'];
	$suratpernyataanbaru = date('dmYHis').$suratpernyataan;
	$path     = "images/".$suratpernyataanbaru;
}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."'";
	$tambah = mysqli_query($koneksi, $sql);
}

if ($row = mysqli_fetch_row($tambah)) {
echo "<script>alert('Data Dengan NOBP = ".$id." sudah ada') </script>";
		echo "<script>window.location.href = \"datakaryawan.php\" </script>";

}

$query = "INSERT INTO tb_mahasiswa set id='$id', nobp='$nobp',username='$username', password='$password', nama='$nama', nohp='$nohp', email='$email', suratpernyataan='$suratpernyataan', universitas='$universitas', jurusan='$jurusan', prodi='$prodi', bidang='$bidang',tanggalmasuk='$tanggalmasuk', lamapkl='$lamapkl',tanggalselesai='$tanggalselesai'";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: datakaryawan.php");
}else{
	echo "gagal";
}

 ?>