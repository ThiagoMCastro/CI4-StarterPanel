<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Mpdf;

// Caminhos
$inputFile = __DIR__ . '/ordem_de_servico_revisada.xlsx';
$outputPDF = __DIR__ . '/saida_ordem_servico.pdf';

// 1. Carrega a planilha
$spreadsheet = IOFactory::load($inputFile);
$sheet = $spreadsheet->getActiveSheet();

// 2. Edita o conteúdo (exemplo)
$sheet->setCellValue('B2', 'Cliente: João Silva');
$sheet->setCellValue('B3', date('d/m/Y'));
$sheet->setCellValue('B4', 'Serviço: Revisão Preventiva');
$sheet->setCellValue('C10', 'R$ 1.350,00');

// 3. Gera PDF mantendo layout
$writer = new Mpdf($spreadsheet);
$writer->setPreCalculateFormulas(false);
$writer->save($outputPDF);

echo "✅ PDF gerado com sucesso: {$outputPDF}";
