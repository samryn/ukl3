<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <title></title>
    </head>
    <body>
    <div class="row" style="margin: top 100px;">
        <div class="col-md"></div>
        <div class="container bg-light rounded" style="margin-top:10px">
	    <div class="container mt-5 pt-5">

<?php
include "connect.php";
    $qry_get_outlet=mysqli_query($connect,"select * from outlet where id = '".$_GET['id']."'");
    $data_outlet=mysqli_fetch_array($qry_get_outlet);
?>
    <h3>Ubah Data Outlet</h3>
    <form action="update_outlet.php" method="post">
    <input type="hidden" name="id" value="<?=$data_outlet['id']?>">
    Nama Outlet :
    <input type="text" name="nama_outlet" value="<?=$data_outlet['nama_outlet']?>" class="form-control">
    <br>
    Alamat :
    <input type="text" name="alamat"value="<?=$data_outlet['alamat']?>" class="form-control">
    <br>
    Nama Owner :
    <input type="text" name="nama_admin" value="<?=$data_outlet['nama_admin']?>" class="form-control">
    <br>
    <input type="submit" name="simpan" value="Ubah data outlet"class="btn btn-primary">

<?php
    include "connect.php";
    $qry_outlet=mysqli_query($connect,"select * from outlet");
    while($data_outlet=mysqli_fetch_array($qry_outlet)){
    if($data_outlet['id']==$data_outlet['id']){
    $selek="selected";  
    } else {
    $selek="";}

   // echo '<option value="'.$data_outlet['id'].'"'.$selek.'>'.$data_outlet['nama'].'</option>';
    }
?>
    </select>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
    </body>
</html>