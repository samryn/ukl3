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
 
        <title>tambah outlet</title>
    </head>
    <body>
    <div class="container mt-5 pt-5">
        <h3 class="mb-4"> Tambah Outlet </h3>
        <form action="create_outlet.php" method="post">
            <div class="form-group mb-3">
                <label for="input-nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" name="nama_outlet" id="input-nama_outlet">
            </div>
            <div class="form-group mb-3">
                <label for="input-alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="input-alamat"></input>
            </div>
            
            <div class="form-group mb-3">
                <label for="input-nama_admin" class="form-label">Nama Owner</label>
                <input type="text" class="form-control" name="nama_admin" id="input-nama_admin"></input>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </body>
</html>