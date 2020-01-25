<?php
include 'koneksi.php';
if ($_POST['id']) {
    $id             = $_POST['id'];
    $kasir          = $_POST['kasir'];
    $produk        	= $_POST['produk'];
    $kategori       = $_POST['kategori'];
	$harga     		= $_POST['harga'];
    $query = "UPDATE product SET product.name = '$produk', product.id_category = '$kategori', product.id_cashier = '$kasir', product.price = '$harga' WHERE product.id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location:index.php");
    } else {
        echo "Gagal nih";
    }
} else {
    header("location:index.php");
}