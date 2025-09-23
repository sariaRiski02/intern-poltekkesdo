<?php

namespace App\Http\Middleware;


use App\Models\visitor;
use Closure;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class visitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // hanya simpan sekali per hari per IP
        $today = Carbon::today()->toDateString();

        if (!visitor::where('ip', $request->ip())
            ->where('visit_date', $today)
            ->exists()) {

            visitor::create([
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'visit_date' => $today,
            ]);
        }


        return $next($request);
    }
}
