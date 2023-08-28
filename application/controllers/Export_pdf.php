<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

require 'vendor/autoload.php';

class Export_pdf extends CI_Controller {

    public function index()
    {
        $selectedMin = $this->input->get('min');
        $selectedMax = $this->input->get('max');

        if (!empty($selectedMin) && !empty($selectedMax)) {
            $minDateFormatted = date('Y-m-d', strtotime($selectedMin));
            $maxDateFormatted = date('Y-m-d', strtotime($selectedMax));
            $periode = 'Periode: ' . date('d F Y', strtotime($selectedMin)) . ' - ' . date('d F Y', strtotime($selectedMax));
            $tanggalCetak = 'Tanggal Cetak: ' . date('d F Y', strtotime('now'));
        } else {
            echo "Error: Minimum and maximum dates are required.";
            return; // Add return to exit the method
        }

        $this->load->model('M_Transaksi'); // Load model M_Transaksi
        $data = $this->M_Transaksi->get_data_by_date_range($minDateFormatted, $maxDateFormatted);

        // Initialize dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML content
        $html = '<html><head><style>';
        $html .= 'table { width: 100%; border-collapse: collapse; }';
        $html .= 'th, td { border: 1px solid #000; padding: 8px; text-align: left; }';
        $html .= '</style></head><body>';
        
        $html .= '<div style="text-align: center;"<h1>Laporan Transaksi Olseller</h1></div>';
        $html .= '<p>-----------------------------------------------------------------------------------------------------------------------------------</p>';
        $html .= '<p>Toko: Media Commputer.Tech <br> '.$periode.'</p>';
    
        $html .= '<p>Nama Akun: JEJE <br> '.$tanggalCetak.'</p>';
        


        
        // Construct the table
        $html .= '<table>';
        $html .= '<tr><th>Nama</th><th>Kategori</th><th>qty</th><th>Harga</th><th>Stok</th><th>Total</th><th>Status</th><th>CreatedAt</th><th>UpdatedAt</th></tr>';
        foreach ($data as $item) {
            $html .= '<tr>';
            $html .= '<td>' . $item->nama . '</td>';
            $html .= '<td>' . $item->kategori . '</td>';
            $html .= '<td>' . $item->qty . '</td>';
            $html .= '<td>' . $item->harga . '</td>';
            $html .= '<td>' . $item->stok . '</td>';
            $html .= '<td>' . $item->total . '</td>';
            $html .= '<td>' . $item->status . '</td>';
            $html .= '<td>' . $item->createdAt . '</td>';
            $html .= '<td>' . $item->updatedAt . '</td>';

            $html .= '</tr>';
        }
        $html .= '</table>';
        
        $html .= '</body></html>';
        
        // Load the HTML into dompdf
        $dompdf->loadHtml($html);
        
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render PDF (first rendering to check for layout issues)
        $dompdf->render();
        
        // Output PDF
        $dompdf->stream("data_transaksi.pdf", array("Attachment" => false));
    }

}