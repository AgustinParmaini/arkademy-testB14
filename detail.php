<?php
include "koneksi.php";
if ($_POST['id']) {
    $id = $_POST['id'];
    // mengambil data berdasarkan id
    $sql = "SELECT product.id AS id_biodata, product.name AS nama_diri, product.price AS harga, category.id_category AS id_kategori, category.name AS nama_kategori, cashier.id_cashier AS id_kasir, cashier.name AS nama_kasir FROM product INNER JOIN category ON product.id_category = category.id_category INNER JOIN cashier ON product.id_cashier = cashier.id_cashier WHERE product.id ='$id'";
    $result = $conn->query($sql);
    foreach ($result as $baris) { ?>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" class="form-control" id="idInput" value="<?php echo $baris['id_biodata'] ?>" name="nama">
            <div class="form-group">
                <input type="text" name="nama" class="form-control" id="nameInput" value="<?php echo $baris['nama_diri'] ?>" name="nama">
            </div>
            <div class="form-group">
                <select class="form-control" id="productSelect" name="produk" required>
                    <?php
                    $sql = "SELECT DISTINCT product.id AS id_produk, product.name AS nama_produk FROM product INNER JOIN category ON product.id_category = category.id_category";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id_produk'] ?>"><?php echo $row['nama_produk'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="categorySelect" name="kategori" required>
                    <?php
                    $sql = "SELECT DISTINCT category.id_category AS id_kategori, category.name AS nama_kategori FROM category";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-md" style="float: right;">EDIT DATA</button>
        </form>
    <?php
    }
}
?>