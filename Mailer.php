<?php

class Mailer
{
    public function __construct(
        private array $dadosConta
    ) {
    }

    public function send(): void
    {
        echo 'Email enviado para ' . $this->dadosConta['email'];
    }
}
