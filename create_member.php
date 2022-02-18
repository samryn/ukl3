<?php
include 'connect.php';
$nama = $_POST['nama_member'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

$query = "INSERT Into member(id, nama, alamat, jenis_kelamin, tlp) Values
(NULL, '$nama','$alamat', '$jenis_kelamin', '$tlp')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num <> 0){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'member.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'member.php';</script>"; 
    echo "<p>" . $result . "</p>";
}

?>  