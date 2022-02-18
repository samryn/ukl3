<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
        <title>tambah member</title>
    </head>
    <body>
    <div class="container mt-5 pt-5">
        <h3 class="mb-4"> Tambah Member </h3>
        <form action="create_member.php" method="post">
            <div class="form-group mb-3">
                <label for="input-nama_member" class="form-label">Nama Member</label>
                <input type="text" class="form-control" name="nama_member" id="input-nama_member">
            </div>
            <div class="form-group mb-3">
                <label for="input-alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="input-alamat"></input>
            </div>
            
            <div class="form-group mb-3">
                <label for="input-jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" id="input-jenis_kelamin"></input>
            </div>
            <div class="form-group mb-3">
                <label for="input-tlp" class="form-label">Telp</label>
                <input type="tlp" class="form-control" name="tlp" id="input-tlp"></input>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </body>
</html>