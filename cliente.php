<?php
require_once __DIR__ . '/CepService.php';
class Cliente
{
    public function cadastrar(): void
    {
        $cep = '11111-100';
        $cepService = new CepService();
        $endereco = $cepService->buscarCep($cep);
        
        echo $endereco;
        //gravar no banco
    }
}
