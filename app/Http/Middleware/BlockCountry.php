<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class BlockCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $countryCode = GeoIP::getLocation($ip)->getAttribute('iso_code');

        // Allowed country code (e.g., 'IL' for Israel)
        $allowedCountryCode = 'IL';

        if ($countryCode !== $allowedCountryCode) {
            return response()->json(['error' => 'Access denied from your country.'], 403);
        }

        return $next($request);
    }
}
