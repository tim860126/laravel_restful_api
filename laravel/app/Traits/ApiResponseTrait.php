<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function errorResponse($message, $status, $code = null)
    {
        $code = $code ?? $status; //$code為null時預設HTTP狀態碼

        return response()->json(
            [
                'message' => $message,
                'code' => $code
            ],
            $status
        );
    }
}