<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $roles = $this->getMiddlewareParameterOnly(func_get_args());

        foreach($roles as $role)
        {
            if (auth()->check() && auth()->user()->hasRole($role))
            {
                return $next($request);
            }
        }

        return abort(401, 'Unauthorized');
    }

    protected function getMiddlewareParameterOnly($args)
    {
        array_shift($args); // Delete $request
        array_shift($args); // Delete Closure $next

        return $args;
    }

}
