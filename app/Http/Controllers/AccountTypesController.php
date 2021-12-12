<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountTypesRequest;
use App\Http\Traits\ApiResponse;
use App\Models\AccountType;
use Illuminate\Http\JsonResponse;

class AccountTypesController extends Controller
{
    use ApiResponse;

    public function index(): JsonResponse
    {

        return $this->successResponse(AccountType::all());

    }


    public function store(AccountTypesRequest $request): JsonResponse
    {
        AccountType::create([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return $this->successMessage('Account is added successfully');
    }


    public function update(AccountTypesRequest $request, AccountType $accountType): JsonResponse
    {

      AccountType::findOrFail($accountType->id)->update([
          'name' => $request->name,
          'updated_at' => now()
      ]);

        return $this->successMessage('Account is updated Successfully');
    }

    public function destroy(AccountType $accountType): JsonResponse
    {
        AccountType::findOrFail($accountType->id)->delete();

        return $this->successMessage('Account is deleted successfully');
    }
}
