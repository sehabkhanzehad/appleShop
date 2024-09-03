<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class Respons
{
    public static function out($message, $data, $statusCode): JsonResponse {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

}
