<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Produk</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }

        td {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <a href="{{route('create')}}" class="btn btn-secondary mt-3">Tambah produk</a>
    <table>
        <thead>
            <tr>
                <td>Nama Produk</td>
                <td>Deskripsi</td>
                <td>Gambar Produk</td>
            </tr>
            @foreach($data as $daftar)
            <tr>
                <td>{{$daftar->namaproduk}}</td>
                <td>{{$daftar->deskripsi}}</td>
                <td><img class="img-preview img-fluid" src="{{ url('/produk/'.$daftar->gambar) }}" 
                style="max-width: 100px;"></td>
            </tr>
            @endforeach
    </table>
</body>

</html>