<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Log;
use Event;
use App\Events\ErrorEvent;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {   
        if($this->isHttpException($e))
        {
            switch ($e->getStatusCode())
                {
                    case 404:
                        Log::info("404 Registered: Redirecting to Homepage");
                        Event::fire(new ErrorEvent($e));
                        return redirect()->guest('/404');
                    break;
                    
                    case 500:
                        Log::info("500 Registered: Redirecting to Homepage");
                        Event::fire(new ErrorEvent($e));
                        return redirect()->guest('/500');
                    break;
                    
                    default:
                        Event::fire(new ErrorEvent($e));
                        return $this->renderHttpException($e);
                    break;   
                }
        }
        else 
        {
            Log::info("Exception Rendered: This was neither 404 or 500");
            Event::fire(new ErrorEvent($e));
            return redirect()->guest('/error');
        }
    }
}
