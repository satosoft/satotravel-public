<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Auth\AuthenticationException;
class Authenticate extends Middleware
{
    /*
     // Get the path the user should be redirected to when they are not authenticated.
     
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    */

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login', ['redirect' => $request->getRequestUri()]);
        }
    }


    public function handle($request, Closure $next, ...$guards)
    {
        try {
            $this->authenticate($request, $guards);
        }catch (AuthenticationException $exception)
        {
            if($request->expectsJson() or $request->segment(1) == 'api')
            {
                return response()->json([
                    'status'=>0,
                    'message'=>$exception->getMessage(),
                    'require_login'=>1
                ],401);
            }

            return redirect(route('login', ['redirect' => $request->getRequestUri()]));

        }

        return $next($request);
    }


}
