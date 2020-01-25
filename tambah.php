<?php
include 'koneksi.php';
if ($_POST['produk']) {
    $produk       = $_POST['produk'];
	$kasir        = $_POST['kasir'];
	$kategori     = $_POST['kategori'];
	$harga        = $_POST['harga'];
    $query = "INSERT INTO product VALUES('', '$produk', '$kasir', '$kategori','$harga');";
    if (mysqli_query($conn, $query)) {
        header("location:index.php");
    } else {
        echo "Gagal nih";
    }
}