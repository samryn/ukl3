<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from member");

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

$query = "UPDATE member set nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', tlp = '$tlp' WHERE id = $id";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
echo "<script>alert('Berhasil update data');location.href= 'member.php';</script>";
}
else
{
    echo "<script>alert('Gagal update data')</script>";
}

?>