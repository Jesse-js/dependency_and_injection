<?php 
require_once __DIR__ . '/CepService.php';

class CepServiceReal implements CepService
{
    public function buscarCep(string $cep): string
    {
        // Faria a consulta na API externa e retornaria o endereço
        sleep(5);
        return 'Rua Alegre, 123 - São Paulo - SP';
    }
}