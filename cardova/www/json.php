<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `penjualan`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>