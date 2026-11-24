<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // 1. Pastikan user sudah login
        if (! auth()->check()) {
            abort(401);
        }

        // 2. Pastikan role user termasuk yang diizinkan
        if (! in_array(auth()->user()->role, $roles)) {
            abort(403, 'Anda tidak memiliki akses ke fitur ini.');
        }

        // 3. Lolos: lanjutkan request
        return $next($request);
    }
}