<?php
include 'connect.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "INSERT Into user(id, nama, username, password, role) Values
(NULL, '$nama','$username', '$password', '$role')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num <> 0){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'user.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'user.php';</script>"; 
    echo "<p>" . $result . "</p>";
}

?>  