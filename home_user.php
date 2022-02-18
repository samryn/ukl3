<?php
session_start();
?>
<html>
    <head>
        <title>Uji Coba Login</title>
    </head>
    <body>
        <h3>Username <?=$_SESSION['username']?> Berhasil Login. Role sebagai 
        <?=$_SESSION['level']?>.
        <br><br>
        <a href="logout.php">Logout</a>
    </body>
</html>