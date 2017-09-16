<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    
    public function handle($request, Closure $next)
    {
        if ($request->user()->admin)
        {
            return $next($request);
        }
        return new RedirectResponse(url('etudiant'));
    }

}
