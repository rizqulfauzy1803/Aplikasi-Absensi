<?php
session_start();
include_once "sesi_mahasiswa.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="Login Mahasiswa ";
switch($modul){
    case 'awal': default: $aktif="Beranda"; $judul="Beranda $jawal"; include "awal.php"; break;
    case 'mahasiswa': $aktif="Mahasiswa"; $judul="Modul Mahasiswa $jawal"; include "modul/mahasiswa/index.php"; break;
    
   
}

?>
