
<?php 

  include_once "../koneksi.php";

  $nobp = $_POST['nobp'];
  $pass = md5($_POST['password']);
  $sql = "SELECT * FROM tb_mahasiswa WHERE nobp='$nobp' AND password='$pass'";
  $login=mysqli_query($koneksi,$sql);
  $ketemu=mysqli_num_rows($login);
  $b=mysqli_fetch_array($login);

print_r($b);
  if($ketemu>0){
    session_start();
    $_SESSION['id']   = $b['id'];
    $_SESSION['nobp'] = $b['nobp'];
    $_SESSION['nama'] = $b['nama'];
    $_SESSION['nohp'] = $b['nohp'];
    $_SESSION['email'] = $b['email'];
    $_SESSION['universitas'] = $b['universitas'];
    $_SESSION['jurusan'] = $b['jurusan'];
    $_SESSION['prodi'] = $b['prodi'];
    $_SESSION['bidang'] = $b['bidang'];
    $_SESSION['tanggalmasuk'] = $b['tanggalmasuk'];
    $_SESSION['lamapkl'] = $b['lamapkl'];
    $_SESSION['tanggalselesai'] = $b['tanggalselesai'];
    header("location: index.php?m=awal");
}else{
    
    // echo '<script language="javascript">';
    //     echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    // echo '</script>';
   //header("location: login_karyawan.php");
}
  

 ?>

