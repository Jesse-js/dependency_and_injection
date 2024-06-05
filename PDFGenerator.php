<?php 

class PDFGenerator
{
    public function gerarPDF(array $produtos): string
    {
        return implode("<br>", $produtos);
    }
}