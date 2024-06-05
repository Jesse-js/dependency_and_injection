<?php 
require_once __DIR__ . '/PDFGenerator.php';
require_once __DIR__ . '/Mailer.php';

class Venda
{
    public function __construct(
        protected PDFGenerator $pdfGenerator,
        protected Mailer $mailer
    ){

    }


    public function notificar(): void
    {
        //gerar um pdf com os detalhes da venda 

        echo $this->pdfGenerator->gerar(['aaaaaaa', 'bbbbbbb']);

        //enviar o pdf para o comprador
        echo "<br>";
        $this->mailer->send();

    }
}