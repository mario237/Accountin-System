<?php

namespace Tests\Feature;

use App\Http\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class AccountTypesTest extends TestCase
{
    use ApiResponse;

    public function testBasic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testGetAlAccountTypes(): JsonResponse
    {
        $response = $this->get('/api/account-types');

        $response->assertStatus(200);

       return $this->successResponse($response);


    }

    public function testAddAccountType(): JsonResponse
    {
        $response = $this->withHeader('Content-Type' , 'application/json')
            ->post('api/accounting/account-types' , [
                'name'  => 'Accounts receivable (A/R)'  , 'created_at' => now() , 'updated_at' => now()
            ]);

        $response->assertStatus(200);

        return $this->successMessage($response);
    }

    public function testUpdateAccountType(): JsonResponse
    {
        $response = $this->withHeader('Content-Type' , 'application/json')
            ->put('api/account-types/1' , [
                'name'  => 'Accounts receive'
            ]);

        $response->assertStatus(200);

        return $this->successMessage($response);
    }

    public function testDeleteAccountType(): JsonResponse
    {
        $response = $this->withHeader('Content-Type' , 'application/json')
            ->delete('api/account-types/1');

        $response->assertStatus(200);

        return $this->successMessage($response);
    }


}
