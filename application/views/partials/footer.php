<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo"><a href=""><img src=""></a></div>
        <div class="input_bt">
            
            </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="<?= base_url('produk')?>">Produk</a></li>
                    <li><a href="<?= base_url('layanan')?>">Layanan</a></li>
                    <li><a href="<?= base_url('harga')?>">Harga</a></li>
                    <li><a href="<?= base_url('support')?>">Support</a></li>
                    <li><a href="<?= base_url('customer_service')?>">Customer Service</a></li>
                </ul>
            </div>
            <div class="location_main">Contact Person : <a href="#">+62-821-5423-1513</a><br>
        E-mail : <a href="mailto:cs@mediacomputer.tech">cs@mediacomputer.tech</a></div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright © <?php echo date('Y')?> All Rights Reserved. Design by <a href="https://mediacomputer.tech">MediaComputer.Tech</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- sidebar -->
<script>
    function toggleMenu() {
        var menuList = document.getElementById('menuList');

        if (menuList.style.display === 'block') {
            menuList.style.display = 'none';
        } else {
            menuList.style.display = 'block';
        }
    }

    // Adjust menu initially based on screen size
    function adjustMenu() {
        var toggleIcon = document.getElementById('toggleIcon');
        var menuList = document.getElementById('menuList');

        if (window.innerWidth <= 768) {
            toggleIcon.style.display = 'inline-block';
            menuList.style.display = 'none';
        } else {
            toggleIcon.style.display = 'none';
            menuList.style.display = 'block';
        }
    }

    // Call the adjustMenu function on page load and resize
    window.addEventListener('load', adjustMenu);
    window.addEventListener('resize', adjustMenu);
</script>


<script src="<?= base_url();?>assets/teemplate/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?= base_url();?>assets/teemplate/js/off-canvas.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/hoverable-collapse.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/template.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/settings.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/todolist.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="<?= base_url();?>assets/teemplate/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?= base_url();?>assets/teemplate/vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="<?= base_url();?>assets/teemplate/js/file-upload.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/typeahead.js"></script>
<script src="<?= base_url();?>assets/teemplate/js/select2.js"></script>