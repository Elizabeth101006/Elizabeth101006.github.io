<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penjualan LEFT JOIN pelanggan ON pelanggan.id_pelanggan = penjualan.id_pelanggan WHERE id_penjualan=$id");
$data = mysqli_fetch_array($query);
?>

<div class="container-fluid">
                        <h1 class="mt-4">detail Pembelian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">detail Pembelian</li>
                        </ol>
                        <a href="?page=Pembelian" class="btn btn-primary">kembali</a>
                        <hr>

                        <form method="post">
    <table class="table table-bordered">
        <tr>
            <td width="200">Nama Pelanggan</td>
            <td width="1">:</td>
            <td>
                <?php echo $data ['nama_pelanggan'];?>
            </td>
        </tr>
            <?php
                $pro = mysqli_query($koneksi, "SELECT * FROM detail_penjualan LEFT JOIN produk on produk.id_produk=detail_penjualan.id_produk where id_penjualan = $id");

                while ($produk = mysqli_fetch_array($pro)) {
            ?>
                                <tr>
                                    <td><?php echo $produk['nama_produk']; ?></td>
                                    <td>:</td>
                                    <td>
                                        harga satuan : <?php echo $produk['harga']; ?><br>
                                        jumlah : <?php echo $produk['jumlah_produk']; ?><br>
                                        sub total : <?php echo $produk['sub_total']; ?>
                                </td>
                                </tr>
                                <?php
                                 }
                                ?>
                                <tr>
                                    <td>total</td>
                                    <td>:</td>
                                    <td><?php echo $data['total_harga']; ?></td>
                                </tr>
                            </table>
                        </form>

                    </div>