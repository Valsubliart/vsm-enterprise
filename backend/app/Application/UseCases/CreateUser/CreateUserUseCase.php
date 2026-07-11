<?php

namespace App\Application\UseCases\CreateUser;

use App\Domain\Identity\Contracts\UserRepositoryInterface;
use App\Domain\Identity\Entities\User;
use App\Domain\Identity\ValueObjects\Email;

class CreateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $repository
    ) {
    }

    public function execute(
        string $id,
        string $name,
        string $email
    ): void {
        $emailValue = new Email($email);

        $user = new User(
            $id,
            $name,
            $emailValue->value()
        );

        $this->repository->save($user);
    }
}
