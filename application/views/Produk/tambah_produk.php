<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Produk</h1>
        </div>
        <div class="section-body">
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('Produk/List_Produk/tambah_data_aksi'); ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputName1">ID USER</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="ID USER"
                                name="user_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Kategori"
                                name="kategori">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Produk</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nama Produk"
                                name="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi"
                                name="deskripsi">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword4">Harga</label>
                            <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Rp. "
                                name="harga">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword4">Stok</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Stok"
                                name="stok">
                        </div>
                        <div class=" form-group">
                            <label>Upload Gambar Produk</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Gambar Produk" name="gambar">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Ditambah</label>
                            <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi"
                                name="createdAt">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Diubah</label>
                            <input type="date" class="form-control" id="exampleInputPassword4" placeholder="Deskripsi"
                                name="updatedAt">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>