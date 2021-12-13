<?php

namespace App\Http\Actions;

use App\Http\Traits\ApiResponse;
use App\Models\AccountType;
use Illuminate\Http\JsonResponse;

class IndexAccountTypeAction
{

    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        return $this->successResponse(AccountType::all());

    }
}
