<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Produk</h1>
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
                            <table class="table table-striped" id="sortable-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>No</th>
                                        <th>ID Produk</th>
                                        <th>User ID</th>
                                        <th>Kategori</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Gambar</th>
                                        <th>CreatedAT</th>
                                        <th>UpdatedAT</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($product as $d) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->id_product?></td>
                                        <td><?php echo $d->user_id?></td>
                                        <td><?php echo $d->kategori?></td>
                                        <td><?php echo $d->nama?></td>
                                        <td><?php echo $d->deskripsi?></td>
                                        <td><?php echo $d->harga?></td>
                                        <td><?php echo $d->stok?></td>
                                        <td><?php echo $d->gambar?></td>
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