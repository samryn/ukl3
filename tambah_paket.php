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
 
        <title>tambah Paket</title>
    </head>
    <body>
    <div class="container mt-5 pt-5">
        <h3 class="mb-4"> Tambah Paket </h3>
        <form action="create_paket.php" method="post">
            <div class="form-group mb-3">
                <label for="input-jenis" class="form-label">Jenis Paket</label>
                <input type="text" class="form-control" name="jenis" id="input-jenis">
            </div>
            <div class="form-group mb-3">
                <label for="input-harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="input-harga"></input>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </body>
</html>