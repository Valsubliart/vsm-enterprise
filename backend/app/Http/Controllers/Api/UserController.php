<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application\UseCases\CreateUser\CreateUserUseCase;

class UserController extends Controller
{
    public function __construct(
        private CreateUserUseCase $createUser
    ) {
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $this->createUser->execute(
            $data['id'],
            $data['name'],
            $data['email']
        );

        return response()->json([
            'message' => 'Usuário criado com sucesso'
        ]);
    }
}
