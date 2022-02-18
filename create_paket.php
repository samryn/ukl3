<?php
include 'connect.php';
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "INSERT Into paket(id, jenis, harga) Values
(NULL, '$jenis','$harga')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num <> 0){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'paket.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'paket.php';</script>";
    echo "<p>" . $result . "</p>";
}

?> 