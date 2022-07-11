<?php

require 'koneksi.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


$spreadsheed = new Spreadsheet();
$sheet = $spreadsheed->getActiveSheet();
$sheet->setCellValue('C3', 'id');
$sheet->setCellValue('D3', 'title');
$sheet->setCellValue('E3', 'cover');
$sheet->setCellValue('F3', 'desciption');
$sheet->setCellValue('G3', 'harga');

$result = $koneksi->query("SELECT * FROM books");
if ($result->num_rows > 0) {
    $n = 3;
    while ($row = $result->fetch_assoc()) {
        $celNum = $n + 1;
        $sheet->setCellValue('C' . $celNum, $row['id']);
        $sheet->setCellValue('D' . $celNum, $row['title']);
        $sheet->setCellValue('E' . $celNum, $row['cover']);
        $sheet->setCellValue('F' . $celNum, $row['description']);
        $sheet->setCellValue('G' . $celNum, $row['harga']);
        $n++;
    }
}
$filename = 'sample-' . time() . '.xlsx';
// Redirect output to a client's web browser Xlsx
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needded
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');

$writer = IOFactory::createWriter($spreadsheed, 'Xlsx');
$writer->save('php://output');
