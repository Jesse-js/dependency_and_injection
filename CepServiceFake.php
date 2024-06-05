<?php 
require_once __DIR__ . '/CepService.php';

class CepServiceFake implements CepService
{
    public function buscarCep(string $cep): string
    {
        // Faria a consulta na API externa e retornaria o endereço
        return 'Rua Triste, 321 - São Paulo - SP';
    }
}