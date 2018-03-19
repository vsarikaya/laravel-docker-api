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
    public static function generate(?string $message, int $errorCode = 200, bool $success = true): object
    {
        if($success)
            return response()->json(['success' => $success, 'message' => $message], $errorCode);
        else
            return response()->json(['success' => $success, 'errorMessage' => $message, 'errorCode' => $errorCode], $errorCode);
    }
}