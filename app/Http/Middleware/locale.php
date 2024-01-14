<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class Locale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response|JsonResponse|RedirectResponse
    {
        // Setting initial value for locale
        $locale = config('app.locale');

        // Checking if request has locale
        if ($request->has('_locale')) {
            // Getting locale
            $locale = $request->get('_locale');

            // Checking if the app supports locale
            $locales = ['en', 'hi'];
            if (! in_array($locale, $locales)) {
                $locale = config('app.locale');
            }

            // Putting locale in session
            session()->put('_locale', $locale);
        }

        // Getting locale from session
        $locale = session()->get('_locale');

        // If session does not have locale then resetting with fallback locale
        if (! (isset($locale))) {
            $locale = config('app.fallback_locale');
        }

        // Setting app locale
        app()->setLocale($locale);

        return $next($request);
    }
}