<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
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
<!-- LOGUT-->
<script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
    event.preventDefault();

    const token = getTokenFromSession(); // Fungsi untuk mengambil token dari sesi
    const user_id = getUserIdFromSession(); // Fungsi untuk mengambil user_id dari sesi

    if (!token) {
        console.error('Token is missing');
        return;
    }

    const requestData = {
        user_id: user_id
    };

    fetch('https://couplemoment.com/user/logout', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}` // Sertakan token dalam header Authorization
        },
        body: JSON.stringify(requestData)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Logout successful:', data.message);
        window.location.href = '<?= base_url('login'); ?>';
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

function getTokenFromSession() {
    // Implementasikan cara Anda mengambil token dari sesi atau local storage
    return sessionStorage.getItem('token');
}

function getUserIdFromSession() {
    // Implementasikan cara Anda mengambil user_id dari sesi atau elemen tersembunyi
    return sessionStorage.getItem('user_id');
}

</script>
</body>

</html>