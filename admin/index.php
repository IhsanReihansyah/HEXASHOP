<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include '../koneksi.php';
                $query = mysqli_query($conn, "SELECT * from produk as p join ukuran_produk as up on p.id_ukuran = up.id_ukuran join status_produk as sp on p.id_status = sp.id_status join gender_produk as gp on p.id_gender = gp.id_gender ORDER BY p.id ASC;");
                ?>
                <center>
                    <h1>DATA BAJU:</h1>
                </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA">
                    Tambah Baju </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Gambar
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Gender
                        </th>
                        <th>
                            Ukuran
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $data["id"] ?></td>
                                <td><?php echo $data["nama_produk"] ?></td>
                                <td> <img src="<?php echo $data["image"] ?>" width="100"> </td>
                                <td><?php echo $data["harga"] ?></td>
                                <td><?php echo $data["gender"] ?></td>
                                <td><?php echo $data["ukuran"] ?></td>
                                <td><?php echo $data["status_produk"] ?></td>
                                <td> 
                                    <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a>&nbsp; 
                                    <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger">Delete </a> 
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>