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
    $qry_get_user=mysqli_query($connect,"select * from user where id = '".$_GET['id']."'");
    $data_user=mysqli_fetch_array($qry_get_user);
?>
    <h3>Ubah Data User</h3>
    <form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?=$data_user['id']?>">
    Nama :
    <input type="text" name="nama" value="<?=$data_user['nama']?>" class="form-control">
    <br>
    Username :
    <input type="text" name="username"value="<?=$data_user['username']?>" class="form-control">
    <br>
    password :
    <input type="text" name="password" value="<?=$data_user['password']?>" class="form-control">
    <br>
    Role :
    <input type="text" name="role" value="<?=$data_user['role']?>" class="form-control">
    <br>
    <input type="submit" name="simpan" value="Ubah data user"class="btn btn-primary">

<?php
    include "connect.php";
    $qry_user=mysqli_query($connect,"select * from user");
    while($data_user=mysqli_fetch_array($qry_user)){
    if($data_user['id']==$data_user['id']){
    $selek="selected";  
    } else {
    $selek="";}

   // echo '<option value="'.$data_user'id'].'"'.$selek.'>'.$data_user['nama'].'</option>';
    }
?>
    </select>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
    </body>
</html>