/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

// DATA TABLES
$(document).ready(function () {
    var dataTable = $('#data_table').DataTable({
        "ajax": {
            "url": "<?php echo base_url('Produk/Produk/get_data'); ?>",
            "type": "POST",
            "data": function (d) {
                d.start_date = $('#start_date').val();
                d.end_date = $('#end_date').val();
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "date" }
        ]
    });

    $('#filter').click(function () {
        dataTable.ajax.reload();
    });
});