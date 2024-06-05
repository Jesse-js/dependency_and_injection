<?php 
require_once __DIR__ . '/RelatorioGenerator.php';

class XLSGenerator implements RelatorioGenerator
{
    public function gerar(array $produtos): string
    {
        return implode("<br> XLS ", $produtos);
    }
}