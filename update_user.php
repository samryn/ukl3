<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from user");

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$pass = md5($password);
$query = "UPDATE user set nama = '$nama', username = '$username', password = '$password', role = '$role' WHERE id = $id";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
echo "<script>alert('Berhasil update data');location.href= 'user.php';</script>";
}
else
{
    echo "<script>alert('Gagal update data')</script>";
}

?>