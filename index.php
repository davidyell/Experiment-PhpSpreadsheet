<?php
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$fileName = 'Example.xlsx';
$objPHPExcel = IOFactory::load($fileName);

var_dump($objPHPExcel);