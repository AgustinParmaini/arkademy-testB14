<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM product WHERE product.id = '$id''";
if (mysqli_query($conn, $query)) {
    header("location:index.php");
} else {
    echo "Gagal nih";
}
