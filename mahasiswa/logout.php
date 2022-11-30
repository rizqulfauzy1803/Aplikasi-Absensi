<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['nobp']);
unset($_SESSION['nama']);
unset($_SESSION['nohp']);
unset($_SESSION['email']);
unset($_SESSION['suratpernyataan']);
unset($_SESSION['universitas']);
unset($_SESSION['jurusan']);
unset($_SESSION['prodi']);
unset($_SESSION['bidang']);
unset($_SESSION['tanggalmasuk']);
unset($_SESSION['lamapkl']);
unset($_SESSION['tanggalselesai']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
