<?php

namespace App\Http\Actions;

use App\Http\Traits\ApiResponse;
use App\Models\AccountType;
use Illuminate\Http\JsonResponse;

class DeleteAccountTypeAction
{

    use ApiResponse;

    public function __invoke($id): JsonResponse
    {
        AccountType::findOrFail($id)->delete();

        return $this->successMessage('Account is deleted successfully');
    }
}
