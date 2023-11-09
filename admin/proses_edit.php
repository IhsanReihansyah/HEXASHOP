<?php 
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$id = $_POST["id"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$id_gender = $_POST["id_gender"];
$id_ukuran = $_POST["id_ukuran"];
$id_status = $_POST["id_status"];

// Upload Proses
if($_FILES["fileToUpload"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "../assets/images/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

$result = mysqli_query($conn, "UPDATE `produk` set `id` = '$id', `nama_produk` = '$nama_produk', `harga` = '$harga', `id_gender` = '$id_gender', `id_ukuran` = '$id_ukuran', `id_status` = '$id_status', `image`= '$target_file' where `id` = '$_GET[id]'");

header("Location:index.php");

?>