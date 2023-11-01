<?php

namespace App\Http\Middleware;

use App\Models\Warehouse;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class WarehouseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $warehouses = Warehouse::all();
        View::share('warehouses', $warehouses);

        return $next($request);
    }
}
