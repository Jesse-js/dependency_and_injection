<?php 

require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CepService.php';


require_once __DIR__ . '/Produto.php';
require_once __DIR__ . '/PDFGenerator.php';
require_once __DIR__ . '/XLSGenerator.php';

echo (new Cliente(new CepService))->cadastrar();
echo '<br>';
echo (new Produto(new PDFGenerator))->gerarRelatorio();
echo '<br>';
echo (new Produto(new XLSGenerator))->gerarRelatorio();