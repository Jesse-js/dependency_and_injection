<?php 
require_once __DIR__ . '/RelatorioGenerator.php';
class Produto
{
    public function __construct(
        protected RelatorioGenerator $relatorioGenerator
    ) {
        $this->relatorioGenerator = $relatorioGenerator;
    }
    public function gerarRelatorio(): string 
    {
        $produtos = ['produto 1', 'produto 2'];
        return $this->relatorioGenerator->gerar($produtos);
    }
}