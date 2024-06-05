<?php 

require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/CepService.php';


(new Cliente(new CepService))->cadastrar();