<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable({
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": true,
                "searching": false
            });
        });
    </script>

    <style>
        .enak {
            margin-bottom: 15px;
            margin-left: 980px;
            /* Menempatkan tombol di sebelah kanan */
            /* display: block;  Agar tombol menempati satu baris penuh */
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include '../koneksi.php';
                $query = mysqli_query($conn, "SELECT * from produk as p join ukuran_produk as up on p.id_ukuran = up.id_ukuran join status_produk as sp on p.id_status = sp.id_status join gender_produk as gp on p.id_gender = gp.id_gender ORDER BY p.id_gender ASC;");
                ?>
                <br>
                <a class=" btn btn-info fs-6 enak" style="margin-bottom:15px"
                    href="tambah.php?nama_halaman=NAMA HALAMAN NYA">
                    Tambah Baju </a>
                <table id="table_id" class="display table table-striped table-bordered" width="100%">
                    <thead>
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
                    </thead>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tbody>
                                <tr class="text-center fs-6 fw-semibold">
                                    <td>
                                        <?php echo $data["id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["nama_produk"] ?>
                                    </td>
                                    <td> <img src="<?php echo $data["image"] ?>" width="50"> </td>
                                    <td>
                                        <?php echo $data["harga"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["gender"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["ukuran"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["status_produk"] ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning fs-6"> Ubah
                                        </a>&nbsp;
                                        <a href="proses_hapus.php?id=<?php echo $data["id"] ?>"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"
                                            class="btn btn-danger fs-6">Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</body>
</html>