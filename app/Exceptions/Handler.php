<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Exceptions\UnauthorizedException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
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
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        /*if($exception instanceof UnauthorizedException){
           return redirect('/');
        }*/


        if($exception instanceof AuthenticationException ){
            return $this->unauthenticated($request,$exception);
        }

      /*  if ($exception instanceof ValidationException) {
            return response()->json([], 200);
        }*/

        if($exception instanceof ValidationException){
            return $this->convertValidationExceptionToResponse($exception,$request);
        }

        return parent::render($request, $exception);
    }

    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {

        $errors = $e->validator->errors()->getMessages();

        if($this->isFrontendRequest($request)){
            return $request->ajax() ?
                response()
                    ->json($errors,422):
                redirect()
                    ->back()
                    ->withInput($request->input())
                    ->withErrors($errors);
        }

        return $this->errorResponse($errors,422);

    }

    private function isFrontendRequest(Request $request){
        return $request->acceptsHtml() && collect($request->route()->middleware())->contains('web');
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if( $request->expectsJson() ){
            response()->json(['message' => $exception->getMessage()], 401);
        }

        $guard = array_get($exception->guards(),0);
        switch ($guard){
            case 'admin':
                $login = 'admin.login.form';
                break;
            default:
                $login = 'login';
                break;

        }


        return redirect()->guest(route($login));
    }

}
