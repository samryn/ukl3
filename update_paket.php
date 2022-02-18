<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from paket");

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "UPDATE paket set jenis = '$jenis', harga = '$harga' WHERE id = $id";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)    
{
echo "<script>alert('Berhasil update data');location.href= 'paket.php';</script>";
}
else
{
    // echo "<script>alert('Gagal update data');</script>";
    $error = mysqli_error($connect);
            echo $error;
            echo "<script>alert('Data gagal disimpan : '$error' !');</script>";
}


?>