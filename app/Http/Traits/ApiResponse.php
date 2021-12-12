<?php

namespace App\Http\Traits;


use Illuminate\Http\JsonResponse;

trait ApiResponse
{

    public function successMessage($message = 'success', $code = 200): JsonResponse
    {
        return response()->json([
            'message'=> $message
        ], $code);
    }


    public function errorResponse($message = "Error not found", $code = 404): JsonResponse
    {
        return response()->json([
            'message'=> $message
        ], $code);
    }




    public function successResponse($data): JsonResponse
    {
        return response()->json([
            'message'=> 'success', 'data' => $data
        ]);
    }

}
