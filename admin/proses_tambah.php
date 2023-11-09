<?php 
include '../koneksi.php';

// get variable from form input
$id = $_POST["id"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$id_gender = $_POST["id_gender"];
$id_ukuran = $_POST["id_ukuran"];
$id_status = $_POST["id_status"];

// Upload Proses
$target_dir = "../assets/images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `id_gender`, `id_ukuran`, `id_status`, `image`) VALUES ('$id', '$nama_produk', '$harga', '$id_gender', '$id_ukuran', '$id_status', '$target_file');");
// $result = mysqli_query($conn, "INSERT INTO `ukuran` (`ukuran`) VALUES ('$ukuran')");
// $result = mysqli_query($conn, "INSERT INTO `status_produk` (`status_produk`) VALUES ('$status_produk')");
header("Location:index.php");

?>