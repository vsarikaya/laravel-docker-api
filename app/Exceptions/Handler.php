<?php

namespace App\Exceptions;

use App\Helpers\ResponseResult;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return object
     */
    public function render($request, Exception $exception)
    {
        // Log exception
        Log::channel('exception')->error("errorCode: \t" . $exception->getCode() . "\t" .
                                         "errorMessage: \t" . $exception->getMessage() . "\t" .
                                         "file: \t" . $exception->getFile() . ":" . $exception->getLine());

        // Filter custom exception
        if($exception instanceof TokenException || $exception instanceof NotFoundRecordException){
            return ResponseResult::generate($exception->getMessage(), $exception->getCode(), false);
        }

        // Set default exception hidden exception detail
        return ResponseResult::generate(__('exception.pageNotFound'), 404, false);
    }
}
