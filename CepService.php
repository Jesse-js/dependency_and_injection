<?php 

interface CepService 
{
    public function buscarCep(string $cep): string;
}