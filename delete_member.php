<<?php

include 'connect.php';

$id = $_GET['id'];
 $hapus = mysqli_query($connect, "DELETE FROM member WHERE id='$id'");
 if($hapus){
     echo "<script>alert('Data Berhasil Dihapus !');location.href='member.php';</script>";
 }else{
     echo "<script>alert('Maaf, data tersebut masih terhubung dengan data yang lain');</script>";
     $error = mysqli_error($connect);
     echo $error;
     echo "<script>alert('Data gagal disimpan : '$error' !');</script>";
// echo "<p>" . $id . "</p>";
}
?>