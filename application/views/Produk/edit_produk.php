<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Produk</h1>
        </div>
        <div class="section-body">
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('Produk/Produk/update_data_aksi'); ?>" method="post">
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">ID Produk</label>
                            <div class="col-md-10">
                                <input class="form-control" type="hidden" value="<?php echo $product['id_product'] ?>"
                                    id="html5-text-input" name="id_product" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">ID USER</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo $product['user_id'] ?>" name="user_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo $product['kategori'] ?>" name="kategori">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Produk</label>
                            <input type="text" class="form-control" id="exampleInputEmail3"
                                value="<?php echo $product['nama'] ?>" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                value="<?php echo $product['deskripsi'] ?>" name="deskripsi">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword4">Harga</label>
                            <input type="number" class="form-control" id="exampleInputPassword4"
                                value="<?php echo $product['harga'] ?>" name="harga">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword4">Stok</label>
                            <input type="text" class="form-control" id="exampleInputPassword4"
                                value="<?php echo $product['stok'] ?>" name="stok">
                        </div>
                        <div class=" form-group">
                            <label>Upload Gambar Produk</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    value="<?php echo $product['gambar'] ?>" name="gambar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Ditambah</label>
                            <input type="date" class="form-control" id="exampleInputPassword4"
                                value="<?php echo $product['createdAt'] ?>" name="createdAt">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Diubah</label>
                            <input type="date" class="form-control" id="exampleInputPassword4"
                                value="<?php echo $product['updatedAt'] ?>" name="updatedAt">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>