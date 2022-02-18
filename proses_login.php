<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if($username==""||$password==""){
    echo "<script>alert('username/password kosong);location.href='form_login.php';</script>";
    // header('location:form-login.php);
}else{
    $pass = md5($password);
    $query = "select * from user where username ='$username' and password = '$pass'";
    echo $query;
    $result=mysqli_query($connect,$query);
    $num=mysqli_num_rows($result);
    if($num == 1){
        $data=mysqli_fetch_array($result);
        $_SESSION['username']=$username;
        $_SESSION['level']=$data['role'];
        if($_SESSION['level']=='admin'){
            header("location:home_admin.php");
        }elseif($_SESSION['level']=='petugas'){
        header("location:home_petugas.php");
        }else{
            header("location:home_user.php");
        }
    }else{
        echo "<script>alert('username/password salah');location.href= 'form_login.php';</script>";
        header("location:form_login.php");
    }
}
?>