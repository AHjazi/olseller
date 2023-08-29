<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-shopping-cart" style="color: #ffffff;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Product</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $jumlah_produk; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fa fa-exchange" style="color: #ffffff;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $jumlah_transaksi; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Data Customer</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $jumlah_customer; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fa-solid fa-list" style="color: #ffffff;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kategori</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $jumlah_customer; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4>Transaksi vs Jumlah Produk Per Kategori</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>

            <script>
            var ctx = document.getElementById('myChart').getContext('2d');

            // Contoh data (ganti dengan data Anda)
            var categories = ['Januari', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ];
            var transactionData = [25, 40, 15];
            var productData = [120, 80, 60];

            var myChart = new Chart(ctx, {
                type: 'line', // Ganti tipe grafik menjadi line
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Transaksi',
                        data: transactionData,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: true,
                    }, {
                        label: 'Jumlah Produk Per Kategori',
                        data: productData,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            </script>


            <div class="section-body">
            </div>
    </section>
</div>
</div>