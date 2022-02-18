<?php
include 'connect.php';
$nama = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$nama_admin = $_POST['nama_admin'];

$query = "INSERT Into outlet(id, nama_outlet, alamat, nama_admin) Values
(NULL, '$nama','$alamat', '$nama_admin')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num <> 0){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'outlet.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'outlet.php';</script>";
    echo "<p>" . $result . "</p>";
}

?> 