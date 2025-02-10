<div class="container-fluid px-4">
    <h1 class="mt-4 text-center text-uppercase fw-bold">Dashboard</h1>
    <ol class="breadcrumb mb-4 justify-content-center bg-light p-3 rounded-3 shadow-sm">
        <li class="breadcrumb-item active">Dashboard Overview</li>
    </ol>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card border-0 shadow-lg bg-primary text-white rounded-4 overflow-hidden position-relative">
                <div class="card-body text-center py-4">
                    <h4 class="fw-bold mb-2">Total Pelanggan</h4>
                    <h2 class="fw-bold display-4"> <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan")); ?> </h2>
                </div>
                <i class="fas fa-users fa-2x  position-absolute bottom-0 start-0 m-2 mb-5 pb-3"></i>
                <div class="card-footer text-center bg-light rounded-bottom-4 py-3">
                    <a class="small text-primary fw-bold" href="?page=pelanggan">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-lg bg-warning text-white rounded-4 overflow-hidden position-relative">
                <div class="card-body text-center py-4">
                    <h4 class="fw-bold mb-2">Total Produk</h4>
                    <h2 class="fw-bold display-4"> <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk")); ?> </h2>
                </div>
                <i class="fas fa-box-open fa-2x  position-absolute bottom-0 start-0 m-2 mb-5 pb-3"></i>
                <div class="card-footer text-center bg-light rounded-bottom-4 py-3">
                    <a class="small text-warning fw-bold" href="?page=produk">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-lg bg-success text-white rounded-4 overflow-hidden position-relative">
                <div class="card-body text-center py-4">
                    <h4 class="fw-bold mb-2">Total Penjualan</h4>
                    <h2 class="fw-bold display-4"> <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM penjualan")); ?> </h2>
                </div>
                <i class="fas fa-chart-line fa-2x  position-absolute bottom-0 start-0 m-2 mb-5 pb-3"></i>
                <div class="card-footer text-center bg-light rounded-bottom-4 py-3">
                    <a class="small text-success fw-bold" href="?page=penjualan">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-lg bg-danger text-white rounded-4 overflow-hidden position-relative">
                <div class="card-body text-center py-4">
                    <h4 class="fw-bold mb-2">Total User</h4>
                    <h2 class="fw-bold display-4"> <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); ?> </h2>
                </div>
                <i class="fas fa-user-shield fa-2x  position-absolute bottom-0 start-0 m-2 mb-5 pb-3"></i>
                <div class="card-footer text-center bg-light rounded-bottom-4 py-3">
                    <a class="small text-danger fw-bold" href="#">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
