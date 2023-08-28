<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- Icon -->
    <link rel="icon" href="<?= base_url('assets/images/landing.png') ?>" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url();?>assets_admin/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets_admin/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets_admin/css/style.css">
    <link rel="stylesheet" href="<?= base_url();?>assets_admin/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="login-brand">
                        <img src="assets/images/landing.png" alt="logo" width="200" height="200" class="shadow-light rounded-circle mb-3">
                        <br>
                        <h2>OLSELLER</h2>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3>Silahkan Daftar Sekarang!</h3>
                            </div>
                            
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('LandingPage/tambah_data'); ?>">
                                <div class="form-group">
                                    <label for="email">Nama</label>
                                    <input type="text" class="form-control" name="nama" tabindex="1"required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi nama anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi alamat anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Nama Usaha</label>
                                    <input type="text" class="form-control" name="nama_usaha" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi nama usaha anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Jenis Usaha</label>
                                    <input type="text" class="form-control" name="jenis_usaha" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi jenis usaha anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Lokasi Usaha</label>
                                    <input type="text" class="form-control" name="lokasi_usaha" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi lokasi usaha anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">No Hp</label>
                                    <input type="text" class="form-control" name="no_hp" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi no hp anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Harap isi email anda!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- General JS Scripts -->
            <script src="<?= base_url();?>assets_admin/modules/jquery.min.js"></script>
            <script src="<?= base_url();?>assets_admin/modules/popper.js"></script>
            <script src="<?= base_url();?>assets_admin/modules/tooltip.js"></script>
            <script src="<?= base_url();?>assets_admin/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?= base_url();?>assets_admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="<?= base_url();?>assets_admin/modules/moment.min.js"></script>
            <script src="<?= base_url();?>assets_admin/js/stisla.js"></script>

            <!-- JS Libraies -->

            <!-- Page Specific JS File -->

            <!-- Template JS File -->
            <script src="<?= base_url();?>assets_admin/js/scripts.js"></script>
            <script src="<?= base_url();?>assets_admin/js/custom.js"></script>
<</body>
</html>