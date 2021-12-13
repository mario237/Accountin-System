<?php

namespace App\Http\Actions;

use App\Http\DTO\AccountTypesDTO;
use App\Http\Traits\ApiResponse;
use App\Models\AccountType;
use Illuminate\Http\JsonResponse;

class UpdateAccountTypeAction
{

    use ApiResponse;

    public function __invoke($id, AccountTypesDTO $dto): JsonResponse
    {
        $accountType = AccountType::findOrFail($id);
        $accountType->update(['name' => $dto->name]);

        return $this->successResponse($accountType, 'Account is updated successfully');
    }
}
