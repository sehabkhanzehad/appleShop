<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class Respons
{
    public static function respons($message, $data, $responseCode): JsonResponse
    {
        return response()->json([
            "message" => $message,
            "data" => $data,
        ], $responseCode);
    }
}
