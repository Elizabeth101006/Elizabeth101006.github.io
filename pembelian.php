<div class="container-fluid px-4">
    <h1 class="mt-4">Pembelian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Pembelian</li>
    </ol>
    <a href="?page=pembelian_tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Pembelian</a>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="20%">Tanggal Pembelian</th>
                        <th width="30%">Pelanggan</th>
                        <th width="25%">Total Harga</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM penjualan 
                                                     LEFT JOIN pelanggan ON pelanggan.id_pelanggan = penjualan.id_pelanggan");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo date('d M Y', strtotime($data['tanggal_penjualan'])); ?></td>
                            <td><?php echo htmlspecialchars($data['nama_pelanggan']); ?></td>
                            <td>Rp <?php echo number_format($data['total_harga'], 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <a href="?page=produk_ubah&&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye "></i> Detail
                                </a>
                                <a href="?page=produk_hapus&&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
