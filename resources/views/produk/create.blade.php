<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="conatiner">
        <h3>Tambah produk</h3>
        <form method="post" action="{{route('tambahproduk')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input name="namaproduk" type="text" class="form-control" id="namaproduk" placeholder="Nama Produk">
                <label for="deskripsi">Nama produk</label>
            </div>
            <div class="form-floating">
                <input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input name="gambar" class="form-control" type="file" id="gambar">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
    </body>
</html>