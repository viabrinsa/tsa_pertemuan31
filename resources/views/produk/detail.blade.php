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

        thead {
            background-color: #0000FF;
        }
    </style>
</head>

<body>
    <h2>Detail Produk</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Produk</td>
                <td>Deskripsi</td>
                <td>Gambar Produk</td>
            </tr>
        </thead>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tsa_31";

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>

        <?php
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM produk');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['namaproduk'] ?></td>
                <td><?php echo $data['deskripsi'] ?></td>
                <td><img src="<?php echo $data['gambar'] ?>" width="300" height="200"></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
<?php $conn->close(); ?>