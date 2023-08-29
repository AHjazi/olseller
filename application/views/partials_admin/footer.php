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
$(document).ready(function() {
    var dataTable = $('#data_table').DataTable({
        "ajax": {
            "url": "<?php echo base_url('Produk/Produk/get_data'); ?>",
            "type": "POST",
            "data": function(d) {
                d.start_date = $('#start_date').val();
                d.end_date = $('#end_date').val();
            }
        },
        "columns": [{
                "data": "id"
            },
            {
                "data": "name"
            },
            {
                "data": "date"
            }
        ]
    });

    $('#filter').click(function() {
        dataTable.ajax.reload();
    });
});
</script>

<script>
document.getElementById("exportToPdfBtn").addEventListener("click", function() {
    // Change the form action to point to the Export_pdf controller
    document.getElementById("exportForm").action = "<?php echo base_url('Export_pdf'); ?>";
    // Submit the form
    document.getElementById("exportForm").submit();
}); <
!--LOGUT-- >
<
script >
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