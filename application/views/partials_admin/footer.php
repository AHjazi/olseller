<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://mediacomputer.tech/">Media
            Computer.Tech</a>
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
<script src="<?= base_url();?>assets_admin/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url();?>assets_admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
</script>
<script src="<?= base_url();?>assets_admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url();?>assets_admin/modules/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="base_url();?>assets_admin/js/page/modules-datatables.js"></script>
<!-- Template JS File -->
<script src="<?= base_url();?>assets_admin/js/scripts.js"></script>
<script src="<?= base_url();?>assets_admin/js/custom.js"></script>


<script>
document.getElementById("exportToPdfBtn").addEventListener("click", function() {
    // Change the form action to point to the Export_pdf controller
    document.getElementById("exportForm").action = "<?php echo base_url('Export_pdf'); ?>";
    // Submit the form
    document.getElementById("exportForm").submit();
});
</script>
</body>

</html>