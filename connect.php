<?php

$host = "localhost";
$db = "ukllaundry";
$uname = "root";
$pass = "";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect)
{
    echo "koneksi ke database gagal : " . mysqli_connect_error();
}
?>