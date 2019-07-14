<?php

namespace App\Http\Middleware;

use Closure;

class RevalidateBackHistory
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
         $response = $next($request);
		return $response->header('Cache-Control','nocache, no-store,max-age=0,
	must-revalidated')
	->header('Pragma','no-cache') //http 1.0
	->header('Expires','fri,01 jan 1990 00:00:00 GTM');
    }
}

//add RevalidateBackHistory class in app\http\kernal.php in $middlewareGroups
//add RevalidateBackHistory class in vendor\laravel\framework\src\illuminate\container\container.php