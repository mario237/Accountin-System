<?php

namespace App\Http\Controllers;

use App\Http\Actions\DeleteAccountTypeAction;
use App\Http\Actions\IndexAccountTypeAction;
use App\Http\Actions\StoreAccountTypeAction;
use App\Http\Actions\UpdateAccountTypeAction;
use App\Http\DTO\AccountTypesDTO;
use App\Http\Requests\AccountTypesRequest;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;

class AccountTypesController extends Controller
{
    use ApiResponse;

    public function index(IndexAccountTypeAction $action): JsonResponse
    {
        return $action();
    }


    public function store(AccountTypesRequest $request, StoreAccountTypeAction $action): JsonResponse
    {

        $dto = new AccountTypesDTO($request->name);

        return $action($dto);
    }


    public function update($id, AccountTypesRequest $request, UpdateAccountTypeAction $action): JsonResponse
    {


        $dto = new AccountTypesDTO($request->name);

        return $action($id, $dto);
    }

    public function destroy($id, DeleteAccountTypeAction $action): JsonResponse
    {
        return $action($id);
    }
}
