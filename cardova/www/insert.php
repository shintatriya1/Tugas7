<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nama_barang=$_POST['nama_barang'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `penjualan` (`nama`,`alamat`,`nama_barang`,`harga`) VALUES ('$nama','$alamat','$nama_barang','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>