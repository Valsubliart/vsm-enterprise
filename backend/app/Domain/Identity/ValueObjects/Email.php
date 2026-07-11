<?php

namespace App\Domain\Identity\ValueObjects;

use InvalidArgumentException;

class Email
{
    private string $value;

    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                'E-mail inválido'
            );
        }

        $this->value = strtolower($email);
    }

    public function value(): string
    {
        return $this->value;
    }
}
