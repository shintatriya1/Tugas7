<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nama_barang=$_POST['nama_barang'];
 $harga=$_POST['harga'];
 
 $q=mysqli_query($con,"UPDATE `penjualan` SET `nama`='$nama',`alamat`='$alamat',`nama_barang`='$nama_barang',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>