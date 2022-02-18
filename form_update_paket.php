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
    $qry_get_paket=mysqli_query($connect,"select * from paket where id = '".$_GET['id']."'");
    $data_paket=mysqli_fetch_array($qry_get_paket);
?>
    <h3>Ubah Data Paket</h3>
    <form action="update_paket.php" method="post">
    <input type="hidden" name="id" value="<?=$data_paket['id']?>">
    Jenis Paket :
    <input type="text" name="jenis" value="<?=$data_paket['jenis']?>" class="form-control">
    <br>
    Harga :
    <input type="text" name="harga"value="<?=$data_paket['harga']?>" class="form-control">
    <br>
    <input type="submit" name="simpan" value="Ubah data paket"class="btn btn-primary">

<?php
    include "connect.php";
    $qry_paket=mysqli_query($connect,"select * from paket");
    while($data_paket=mysqli_fetch_array($qry_paket)){
    if($data_paket['id']==$data_paket['id']){
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