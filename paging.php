<head>
	 
</head>
<?php 
include 'koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_mahasiswa = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;

if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];

	$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%".$cari."%'");
}else{
	$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
}





while ($row=mysqli_fetch_array($data_mahasiswa)) {
	



 ?>

  <tr>
                                         
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['nobp']; ?></td>
                                                <td><?php echo $row['nohp']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['suratpernyataan']; ?></td>
                                                <td><?php echo $row['universitas']; ?></td>
                                                <td><?php echo $row['jurusan']; ?></td>
                                                <td><?php echo $row['prodi']; ?></td>
                                                <td><?php echo $row['bidang']; ?></td>
                                                <td><?php echo $row['tanggalmasuk']; ?></td>
                                                <td><?php echo $row['lamapkl']; ?></td>
                                                <td><?php echo $row['tanggalselesai']; ?></td>
                                                    <td><img src="images/<?php echo $row['suratpernyataan'];?>" ></td>



                                                <td><a href="karyawan_edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Ubah</button></a> <a href="hapus.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?');">Hapus</button></a></td>


                                                
                                            </tr>
                                        <?php } ?>

