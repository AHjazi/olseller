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
                            <table class="table table-striped" id="data_table">
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
                                        <th colspan="2">Action</th>
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
                                        <td>
                                            <img src="<?php echo base_url(''.$d->gambar); ?>" alt="Gambar Produk"
                                                width="100">
                                        </td>

                                        <td><?php echo $d->createdAt?></td>
                                        <td><?php echo $d->updatedAt?></td>
                                        <td>
                                            <div class="buttons" class="row">
                                                <a href="<?php echo base_url('edit_produk/'.$d->id_product)?>"
                                                    class="btn icon btn-warning"><i class="fa fa-edit"></i>Edit</a>
                                                <a href="<?php echo base_url('hapus_produk/'.$d->id_product)?>"
                                                    onclick="return confirm('Anda yakin ingin menghapus produk ini?')"
                                                    class="btn icon btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </td>
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