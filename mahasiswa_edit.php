<?php 
require_once("koneksi.php");
//error_reporting(0);
session_start();
 ?>
 
<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id = '$id'");
    $d= mysqli_fetch_array($data);
  
 ?>

<!DOCTYPE html>
<html>
<head>
  <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Mahasiswa</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->

    <title>Ubah Data</title>
</head>
<body>
<form action="proedit_karyawan.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
  <input type="text" class="form-control" readonly="" name="id" autocomplete="off" value="<?php echo $d['id'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No Bp</label>
  <input type="text" class="form-control" name="nobp" autocomplete="off" value="<?php echo $d['nobp'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
  <input type="text" class="form-control"  name="password" autocomplete="off">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $d['nama'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">No Hp</label>
    <input type="text" class="form-control" name="nohp" autocomplete="off" value="<?php echo $d['nohp'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" autocomplete="off" value="<?php echo $d['email'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Surat Pernyataan</label>
    <input type="text" class="form-control" name="nohp" autocomplete="off" value="<?php echo $d['suratpernyataan'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Universitas</label>
    <input type="text" class="form-control" name="universitas" autocomplete="off" value="<?php echo $d['universitas'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" autocomplete="off" value="<?php echo $d['jurusan'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Prodi</label>
    <input type="text" class="form-control" name="prodi" autocomplete="off" value="<?php echo $d['prodi'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Bidang</label>
    <select class="form-control" name="bidang">
    <option><?php echo $d['bidang']; ?></option>
                                                    <option>--</option>
                                                    <option>STI</option>
                                                    <option>Distribusi</option>
                                                    <option>ICON</option>
                                                    <option>SDM</option>
                                                    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Masuk</label>
    <textarea autocomplete="off" class="form-control" name="tanggalmasuk" value="<?php echo $d['tanggalmasuk'];?>"></textarea>
  
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Lama Pkl</label>
   <input type="text" class="form-control"  name="lamapkl" value="<?php echo $d['lamapkl'];?>">
   <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Selesai</label>
    <input type="text" class="form-control" name="tanggalselesai" autocomplete="off" value="<?php echo $d['tanggalselesai'];?>">
  </div>
                                                <?php 

                                                include 'koneksi.php';

                                                $sql = "SELECT * FROM tb_mahasiswa";

                                                $hasil = mysqli_query($koneksi, $sql);

                                                $no = 0;

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                                $no++;
                                                

                                                 ?>
                                                <option value="<?php echo $data['bidang'];?>"><?php echo $data['bidang']; ?></option>
                                                <?php } ?>
                                                   
                                                </select>
 <div class="form-group">
    <label for="exampleInputPassword1">Surat Pernyataan</label><br>
  <?php 
            if ($d['suratpernyataan']!=''){
                          echo "<img src=\"images/$d[suratpernyataan]\" height=150 />";  
                        }
                        else{
                          echo "tidak ada gambar";
                        }
   ?>
  </div>

  <div class="form-group">
                    <label>Surat Pernyataan</label>
                    <input type="checkbox" name="ubahfoto" value="true"> Ceklis jika ingin mengubah foto !
                    <br>
                    <input type="file" name="inpfoto">
                  </div>

  <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
</form>
</body>
</html>


