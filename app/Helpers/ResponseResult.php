<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 19:40
 */

namespace App\Helpers;


class ResponseResult
{
    public static function generate(bool $success, int $errorCode = 200, ?string $message): array
    {
        if($success)
            return ['success' => $success, 'message' => $message];
        else
            return ['success' => $success, 'errorMessage' => $message, 'errorCode' => $errorCode];
    }
}