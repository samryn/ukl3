<?php
include 'connect.php';
include 'home_admin.php';

$query ="SELECT * FROM member";

$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>

<html>
    <head>
        <title>Member</title>
</head>
<body>
<div class="container">
    <h3>Member LaundrySam</h3>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Telp</th>
</tr>
</thead>
<tbody>
<?php
if($num >0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['alamat'] . "</td>";
        echo "<td>" . $data['jenis_kelamin'] . "</td>";
        echo "<td>" . $data['tlp'] . "</td>";
        echo "<td><a href='form_update_member.php?id=" . $data['id'] . "'>Edit</a> ";
        echo "<td><a href='delete_member.php?id=" . $data['id'] . "'onClick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")' >Delete</a></td>";
        $no++;
    }
}else{
    echo "<td colspan='4'>Tidak ada data</td>";
}
?>
</tbody>
</table>
<br>
<button><a href="tambah_member.php">Tambah</a></button>
</div>
</body>
</html>