<?php 

require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CepServiceReal.php';
require_once __DIR__ . '/CepServiceFake.php';


require_once __DIR__ . '/Produto.php';
require_once __DIR__ . '/PDFGenerator.php';
require_once __DIR__ . '/XLSGenerator.php';

echo (new Cliente(new CepServiceFake))->cadastrar();
echo '<br>';
echo (new Cliente(new CepServiceReal))->cadastrar();
echo '<br>';
echo (new Produto(new PDFGenerator))->gerarRelatorio();
echo '<br>';
echo (new Produto(new XLSGenerator))->gerarRelatorio();