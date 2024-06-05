<?php

require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CepServiceReal.php';
require_once __DIR__ . '/CepServiceFake.php';


require_once __DIR__ . '/Produto.php';
require_once __DIR__ . '/PDFGenerator.php';
require_once __DIR__ . '/XLSGenerator.php';

require_once __DIR__ . '/Venda.php';
require_once __DIR__ . '/Mailer.php';

echo (new Cliente(new CepServiceFake))->cadastrar();
echo '<br>';
echo (new Cliente(new CepServiceReal))->cadastrar();
echo '<br>';
echo (new Produto(new PDFGenerator))->gerarRelatorio();
echo '<br>';
echo (new Produto(new XLSGenerator))->gerarRelatorio();

echo '<br>';
echo '<hr>';
echo '<br>';


$pdf = new PDFGenerator();

$mailer = new Mailer([
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'auth' => true,
    'username' => 'username',
    'password' => 'password',
    'secure' => 'tls',
    'debug' => true,
    'email' => '4gU4M@example.com',
]);

(new Venda($pdf, $mailer))->notificar();
