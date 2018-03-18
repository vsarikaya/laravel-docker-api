<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 17:30
 */

namespace App\Helpers;

use Illuminate\Http\Exceptions\HttpResponseException;

class Response
{
    public static function responseMakerJson(string $message, ?int $responseCode = 200)
    {
        //return response()->json($message, $errorCode);


/*        $responseResult = new ResponseResult();
        $responseResult->success = true;
        $responseResult->errorMessage = null;
        $responseResult->errorCode = 200;
        $responseResult->message = "Ok";*/
        return response()->json(
            ResponseResult::generate(true, $responseCode, $message)
        );

        if($errorCode == 200){
            return response()->json([
                'success' => true,
                'message' => $message
            ], 200);

        } else {

            return response()->json([
                'success' => false,
                'errorMessage' => $message,
                'errorCode' => $errorCode,
            ], $errorCode);

            /*throw new HttpResponseException(response()->json([
                'success' => false,
                'errorMessage' => $errorMessage,
                'errorCode' => $errorCode,
            ],$errorCode));*/
        }

    }
}