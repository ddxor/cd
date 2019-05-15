<?php

namespace App\Http\Middleware;

use Closure;

class PageTitle
{
    /**
     * Create an attribute called pageTitle and assign it to the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $pageTitle = ucfirst($request->route()->getName());

        $request->attributes->add(['pageTitle' => $pageTitle]);

        return $next($request);
    }
}
