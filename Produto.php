<?php 
require_once __DIR__ . '/PDFGenerator.php';

class Produto
{
    public function __construct(
        protected PDFGenerator $pdf
    ) {
        $this->pdf = $pdf;
    }
    public function gerarRelatorio(): string 
    {
        $produtos = ['produto 1', 'produto 2'];
        return $this->pdf->gerarPDF($produtos);
    }
}