<?php 
require_once __DIR__ . '/RelatorioGenerator.php';

class PDFGenerator implements RelatorioGenerator
{
    public function gerar(array $produtos): string
    {
        return implode("<br> PDF ", $produtos);
    }
}