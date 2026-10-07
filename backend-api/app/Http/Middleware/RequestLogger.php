<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class RequestLogger
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Request diterima: ' . $request->method() . ' ' . $request->path());
        return $next($request);
    }
}