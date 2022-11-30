<?php
session_start();
//error_reporting(0);
include 'koneksi.php';

//proses input
if (isset($_POST['ubahdata'])) {
  $id = $_POST['id'];
  $nobp = $_POST['nobp'];
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

  if(isset($_POST['ubahfoto'])){ // Cek apakah user ingin mengubah fotonya atau tidak
    $suratpernyataan     = $_FILES['suratpernyataan']['nama'];
    $tmp      = $_FILES['suratpernyataan']['tmp_name'];
    $suratpernyataanbaru = date('dmYHis').$suratpernyataan;
    $path     = "images/".$suratpernyataanbaru;

    if(move_uploaded_file($tmp, $path)){ //awal move upload file
      $sql    = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."' ";
      $query  = mysqli_query($koneksi, $sql);
      $hapus_f = mysqli_fetch_array($query);

//proses hapus gambar
      $file = "images/".$hapus_f['suratpernyataan'];
      unlink($file);//nama variabel yang ada di server

      // Proses ubah data ke Database
      $sql_f = "UPDATE tb_mahasiswa set nobp='$nobp', password='$password', nama='$nama', nohp='$nohp', email='$email', suratpernyataan='$suratpernyataan', universitas='$universitas', jurusan='$jurusan', prodi='$prodi', bidang='$bidang',tanggalmasuk='$tanggalmasuk', lamapkl='$lamapkl',tanggalselesai='$tanggalselesai' WHERE id='$id'";
      $ubah  = mysqli_query($koneksi, $sql_f);
      if($ubah){
        echo "<script>alert('Ubah Data Dengan ID = ".$id." Berhasil') </script>";
        echo "<script>window.location.href = \"datakaryawan.php\" </script>";
      } else {
        $sql    = "SELECT * FROM tb_mahasiswa WHERE id = '".$id."' ";
        $query  = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href=\"edit_karyawan.php?id=".$row['id']."\"> Kembali Ke From ! </a>";
        }
      }
    } //akhir move upload file
    else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='datakaryawan.php'>Kembali Ke data karyawan</a>";
    }
 } //akhir ubah foto
 else { //hanya untuk mengubah data
   $sql_d   = "UPDATE tb_mahasiswa set nobp='$nobp', password='$password', nama='$nama', nohp='$nohp', email='$email', suratpernyataan='$suratpernyataan', universitas='$universitas', jurusan='$jurusan', prodi='$prodi', bidang='$bidang',tanggalmasuk='$tanggalmasuk', lamapkl='$lamapkl',tanggalselesai='$tanggalselesai' WHERE id='$id'";
   $data    = mysqli_query($koneksi, $sql_d);
   if ($data) {
     echo "<script>alert('Ubah Data Dengan ID = ".$id." Berhasil') </script>";
     echo "<script>window.location.href = \"datakaryawan.php\" </script>";
   } else {
     $sql   = "SELECT * FROM tb_mahasiswa WHERE id= '".$id."' ";
     $query = mysqli_query($koneksi, $sql);
     while ($row = mysqli_fetch_array($query)) {
       echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
       echo "<br><a href=\"edit_karyawan.php?id=".$row['idn']."\"> Kembali Ke From ! </a>";
     }
   }
 } //akhir untuk mengubah data
}

?>
