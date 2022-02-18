<?php
include 'connect.php';
include 'home_admin.php';

$query ="SELECT * FROM outlet";

$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>

<html>
    <head>
        <title>Outlet</title>
</head>
<body>
<div class="container">
    <h3>Outlet LaundrySam</h3>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Outlet</th>
            <th>Alamat</th>
            <th>Nama Owner</th>
</tr>
</thead>
<tbody>
<?php
if($num >0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['nama_outlet'] . "</td>";
        echo "<td>" . $data['alamat'] . "</td>";
        echo "<td>" . $data['nama_admin'] . "</td>";
        echo "<td><a href='form_update_outlet.php?id=" . $data['id'] . "'>Edit</a> ";
        echo "<td><a href='delete_outlet.php?id=" . $data['id'] . "'onClick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")' >Delete</a></td>";
        $no++;
    }
}else{
    echo "<td colspan='4'>Tidak ada data</td>";
}
?>
</tbody>
</table>
<br>
<button><a href="tambah_outlet.php">Tambah</a></button>
</div>
</body>
</html>