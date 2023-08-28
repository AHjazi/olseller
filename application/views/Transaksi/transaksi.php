<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Transaksi</h4>
                        <div class="card-header-action">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <form id="exportForm" action="<?php echo base_url('Export_excel'); ?>" method="get">
                                <table border="0" cellspacing="5" cellpadding="5">
                                    <tbody>
                                        <tr>
                                            <td>Minimum date:</td>
                                            <td><input type="text" id="min" name="min"></td>
                                        </tr>
                                        <tr>
                                            <td>Maximum date:</td>
                                            <td><input type="text" id="max" name="max"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="col-auto ms-auto d-print-none">
                                    <div class="btn-list">
                                        <button type="submit" class="btn btn-success d-none d-sm-inline-block">
                                            <i class="fas fa-file-excel"></i>
                                            Export to Excel
                                        </button>
                                        <button type="button" class="btn btn-danger d-none d-sm-inline-block"
                                            id="exportToPdfBtn">
                                            <i class="fas fa-file-pdf"></i>
                                            Export to PDF
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </form>
                            <table class="table table-striped" id="examplea" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>qty</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>UpdatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($get_joined_data as $d) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->nama?></td>
                                        <td><?php echo $d->kategori?></td>
                                        <td><?php echo $d->qty?></td>
                                        <td><?php echo $d->harga?></td>
                                        <td><?php echo $d->stok?></td>
                                        <td><?php echo $d->total?></td>
                                        <td><?php echo $d->status?></td>
                                        <td><?php echo $d->createdAt?></td>
                                        <td><?php echo $d->updatedAt?></td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script>
var minDate, maxDate;

// DataTables initialisation
var table = $('#examplea').DataTable();

// Custom filtering function which will search data in column four between two values
DataTable.ext.search.push(function(settings, data, dataIndex) {
    var min = minDate.val();
    var max = maxDate.val();
    var date = new Date(data[1]);

    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
    ) {
        return true;
    }
    return false;
});

// Create date inputs
minDate = new DateTime('#min', {
    format: 'YYYY-MM-DD' // Use 'YYYY-MM-DD' format to match the Date constructor
});
maxDate = new DateTime('#max', {
    format: 'YYYY-MM-DD' // Use 'YYYY-MM-DD' format to match the Date constructor
});

// Refilter the table
$('#min, #max').on('change', function() {
    table.draw();
});
</script>

<script>
function formatDate(dateString) {
    var date = new Date(dateString);
    var year = date.getFullYear();
    var month = ("0" + (date.getMonth() + 1)).slice(-2);
    var day = ("0" + date.getDate()).slice(-2);
    return year + "-" + month + "-" + day;
}

document.querySelector("form").addEventListener("submit", function(event) {
    var minInput = document.getElementById("min");
    var maxInput = document.getElementById("max");
    minInput.value = formatDate(minInput.value);
    maxInput.value = formatDate(maxInput.value);
});
</script>