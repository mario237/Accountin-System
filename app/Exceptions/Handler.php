<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Response;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/**
 * @method errorResponse(string $string, int $HTTP_NOT_FOUND)
 */
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Exception  $exception , Request  $request) {

            if ($request->is('api/*')) {


                //   if (app()->bound('sentry') && $this->shouldReport($exception)) {
                //     app('sentry')->captureException($exception);
                // }
                if ($exception instanceof HttpException) {
                    $code = $exception->getStatusCode();
                    $message = Response::$statusTexts[$code];

                    return $this->errorResponse($message, $code);
                }

                if ($exception instanceof ModelNotFoundException) {
                    $model = strtolower(class_basename($exception->getModel()));

                    return $this->errorResponse("Does not exist any instance of {$model} with the given id", Response::HTTP_NOT_FOUND);
                }

                if ($exception instanceof AuthorizationException) {

                    return $this->errorResponse($exception->getMessage(), Response::HTTP_FORBIDDEN);
                }

                if ($exception instanceof AuthenticationException) {

                    return $this->errorResponse($exception->getMessage(), Response::HTTP_UNAUTHORIZED);
                }

                if ($exception instanceof ValidationException) {
                    $errors = $exception->validator->errors()->first();


                    return $this->errorResponse($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                if ($exception instanceof ClientException) {
                    $message = $exception->getResponse()->getBody();
                    $code = $exception->getCode();

                    return $this->errorResponse($message, $code);
                }

                    return  $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
            }

        });
    }

}
