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
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/images/landing.png" alt="logo" width="200" height="200" class="shadow-light rounded-circle mb-3">
                        <br>
                        <h2>OLSELLER</h2>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>Silakan Masuk dengan Akun Olseller Anda!</h4>
                            </div>
                            
                        <div class="card-body">
                            <form id="login-form" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                        required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                                        Login
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
            <!-- <script src="<?= base_url();?>assets_admin/js/scripts.js"></script>
            <script src="<?= base_url();?>assets_admin/js/custom.js"></script> -->
<script>
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const requestData = {
        email: email,
        password: password
    };

    fetch('https://couplemoment.com/user/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(requestData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            console.log('Login successful');
            const token = data.data.token;
            const name = data.data.name; // Mengambil data "name" dari respons
            const user_id = data.data.user_id; // Mengambil data "user_id" dari respons
            sessionStorage.setItem('token', token);
            sessionStorage.setItem('user_id', user_id); // Simpan user_id dalam sesi
            window.location.href = 'Admin/dashboard';

            // Tambahkan kode berikut untuk menampilkan nama pengguna dalam elemen HTML
            const nameElement = document.querySelector('.d-sm-none.d-lg-inline-block');
            if (nameElement) {
                nameElement.textContent = `Hi, ${name}`;
            }
        } else {
            console.log('Login failed:', data.message);
            window.location.href = 'Admin/login';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>

            
<script>
    
</script>
</body>
</html>