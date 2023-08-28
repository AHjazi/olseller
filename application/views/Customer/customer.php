<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Customer</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Data Customer</h4>
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
                            <table class="table table-striped" id="tabel">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>No</th>
                                        <th>ID Customer</th>
                                        <th>ID Transaksi</th>
                                        <th>User ID</th>
                                        <th>Nama</th>
                                        <th>Kode Customer</th>
                                        <th>CreateAt</th>
                                        <th>UpdateAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($customer as $d) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->id_customer?></td>
                                        <td><?php echo $d->id_transaksi?></td>
                                        <td><?php echo $d->user_id?></td>
                                        <td><?php echo $d->nama?></td>
                                        <td><?php echo $d->kode_customer?></td>
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