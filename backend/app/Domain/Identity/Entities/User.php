<?php

namespace App\Domain\Identity\Entities;

class User
{
    private string $id;
    private string $name;
    private string $email;
    private bool $active;

    public function __construct(
        string $id,
        string $name,
        string $email
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->active = true;
    }

    public function deactivate(): void
    {
        $this->active = false;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
