<?php

namespace App\Http\Actions;

use App\Http\DTO\AccountTypesDTO;
use App\Http\Traits\ApiResponse;
use App\Models\AccountType;
use Illuminate\Http\JsonResponse;

class StoreAccountTypeAction
{

    use ApiResponse;

    public function __invoke(AccountTypesDTO $dto): JsonResponse
    {
        $accountType =  AccountType::create([
            'name' => $dto->name
        ]);

        return $this->successResponse($accountType , 'Account is added successfully');
    }
}
