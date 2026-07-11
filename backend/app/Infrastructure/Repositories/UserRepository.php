<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Identity\Contracts\UserRepositoryInterface;
use App\Domain\Identity\Entities\User;

class UserRepository implements UserRepositoryInterface
{
    public function save(User $user): void
    {
        // Implementação inicial
        // Persistência será conectada ao Eloquent/MariaDB
    }

    public function findByEmail(
        string $email
    ): ?User {
        return null;
    }
}
