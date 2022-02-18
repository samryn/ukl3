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
    $qry_get_member=mysqli_query($connect,"select * from member where id = '".$_GET['id']."'");
    $data_member=mysqli_fetch_array($qry_get_member);
?>
    <h3>Ubah Data Member</h3>
    <form action="update_member.php" method="post">
    <input type="hidden" name="id" value="<?=$data_member['id']?>">
    Nama :
    <input type="text" name="nama" value="<?=$data_member['nama']?>" class="form-control">
    <br>
    Alamat :
    <input type="text" name="alamat"value="<?=$data_member['alamat']?>" class="form-control">
    <br>
    Jenis Kelamin :
    <input type="text" name="jenis_kelamin" value="<?=$data_member['jenis_kelamin']?>" class="form-control">
    <br>
    Telp :
    <input type="text" name="tlp" value="<?=$data_member['tlp']?>" class="form-control">
    <br>
    <input type="submit" name="simpan" value="Ubah data member"class="btn btn-primary">

<?php
    include "connect.php";
    $qry_member=mysqli_query($connect,"select * from member");
    while($data_member=mysqli_fetch_array($qry_member)){
    if($data_member['id']==$data_member['id']){
    $selek="selected";  
    } else {
    $selek="";}

   // echo '<option value="'.$data_member['id'].'"'.$selek.'>'.$data_member['nama'].'</option>';
    }
?>
    </select>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
    </body>
</html>