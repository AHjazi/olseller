<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

require 'vendor/autoload.php';

class Export_excel extends CI_Controller {

    public function index()
    {
        $selectedMin = $this->input->get('min');
        $selectedMax = $this->input->get('max');

        if (!empty($selectedMin) && !empty($selectedMax)) {
            $minDateFormatted = date('Y-m-d', strtotime($selectedMin));
            $maxDateFormatted = date('Y-m-d', strtotime($selectedMax));
            $periode = 'Periode: ' . date('d F Y', strtotime($selectedMin)) . ' - ' . date('d F Y', strtotime($selectedMax));
        } else {
            echo "Error: Minimum and maximum dates are required.";
            return; // Tambahkan return untuk keluar dari method
        }

        $this->load->model('M_Transaksi'); // Load model M_Transaksi
        $data = $this->M_Transaksi->get_data_by_date_range($minDateFormatted, $maxDateFormatted);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Tambahkan judul "Laporan Transaksi Olseller"
        $sheet->setCellValue('A1', 'Laporan Transaksi Olseller');
        $sheet->mergeCells('A1:E1'); // Gabungkan sel untuk judul

        // Tambahkan logo pada B2
        $logoPath = FCPATH . 'assets/images/landing.png'; // Ganti dengan path yang benar
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath($logoPath);
        $drawing->setCoordinates('B2'); // Koordinat di mana gambar akan ditempatkan
        $drawing->setHeight(50); // Ubah sesuai kebutuhan
        $drawing->setWidth(50); // Ubah sesuai kebutuhan
        $drawing->setWorksheet($sheet);

        // Tambahkan baris kosong setelah logo
        $sheet->setCellValue('A3', '');

        // Tambahkan informasi nama akun dan toko pada A4
        $namaAkun = "John Doe"; // Ganti dengan nama akun yang sesuai
        $namaToko = "Toko XYZ"; // Ganti dengan nama toko yang sesuai
        $sheet->setCellValue('A5', 'Nama Akun:');
        $sheet->setCellValue('B5', $namaAkun);
        $sheet->setCellValue('A6', 'Toko:');
        $sheet->setCellValue('B6', $namaToko);

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('A4')->getFont()->setBold(true);
        $sheet->getStyle('B4')->getFont()->setBold(true);
        $sheet->getStyle('A5')->getFont()->setBold(true);
        $sheet->getStyle('B5')->getFont()->setBold(true);
        $sheet->getStyle('A6')->getFont()->setBold(true);
        $sheet->getStyle('B6')->getFont()->setBold(true);
        $sheet->getStyle('A8')->getFont()->setBold(true);
        $sheet->getStyle('B8')->getFont()->setBold(true);
        $sheet->getStyle('A9')->getFont()->setBold(true);
        $sheet->getStyle('B9')->getFont()->setBold(true);
        $sheet->getStyle('A1:A1')->getFont()->setSize(14);

        $sheet->setCellValue('A7', '');
        // Tambahkan periode pada A7
        $sheet->setCellValue('A8', 'Periode:');
        $sheet->setCellValue('B8', $periode);

        // Tambahkan tanggal cetak pada A8
        $tanggalCetak = date('d F Y', strtotime('now'));
        $sheet->setCellValue('A9', 'Tanggal Cetak:');
        $sheet->setCellValue('B9', $tanggalCetak);

        // Tambahkan judul kolom pada A11
        $sheet->setCellValue('A11', 'Nama');
        $sheet->setCellValue('B11', 'Kategori');
        $sheet->setCellValue('C11', 'Qty');
        $sheet->setCellValue('D11', 'Harga');
        $sheet->setCellValue('E11', 'Stok');
        $sheet->setCellValue('F11', 'Total');
        $sheet->setCellValue('G11', 'Status');
        $sheet->setCellValue('H11', 'CreatedAt');
        $sheet->setCellValue('I11', 'UpdatedAt');
        

        // Set style untuk judul kolom pada baris A11
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THICK,
                    'color' => ['rgb' => '000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ];
        $sheet->getStyle('A11:E11')->applyFromArray($styleArray);

        $row = 12;
        foreach ($data as $item) {
    $sheet->setCellValue('A' . $row, $item->nama);
    $sheet->setCellValue('B' . $row, $item->kategori);
    $sheet->setCellValue('C' . $row, $item->qty);
    $sheet->setCellValue('D' . $row, $item->harga);
    $sheet->setCellValue('E' . $row, $item->stok);
    $sheet->setCellValue('F' . $row, $item->total);
    $sheet->setCellValue('G' . $row, $item->status);
    $sheet->setCellValue('H' . $row, $item->createdAt);
    $sheet->setCellValue('I' . $row, $item->updatedAt);

            $sheet->getStyle('A' . $row . ':I' . $row)->applyFromArray($styleArray);

            $row++;
        }

        $filename = 'data_transaksi.xlsx';
        $writer = new Xlsx($spreadsheet);

        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

}