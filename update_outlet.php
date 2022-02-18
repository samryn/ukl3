<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from outlet");

$id = $_POST['id'];
$nama = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$nama_admin = $_POST['nama_admin'];

$query = "UPDATE outlet set nama_outlet = '$nama', alamat = '$alamat', nama_admin = '$nama_admin' WHERE id = $id";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
echo "<script>alert('Berhasil update data');location.href= 'outlet.php';</script>";
}
else
{
    // echo "<script>alert('Gagal update data');</script>";
    $error = mysqli_error($connect);
            echo $error;
            echo "<script>alert('Data gagal disimpan : '$error' !');</script>";
}


?>