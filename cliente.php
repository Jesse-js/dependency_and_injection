<?php
require_once __DIR__ . '/CepService.php';
class Cliente
{
    public function __construct(
        protected CepService $cepService
    ) {
        //injeção de dependência na classe cliente do CepService
        $this->cepService = $cepService;
    }
    public function cadastrar(): void
    {
        $cep = '11111-100';
        //$cepService = new CepService(); //com a injeção de dependência excluo essa instanciação do CepService
        echo $this->cepService->buscarCep($cep);

        //gravar no banco
    }
}
