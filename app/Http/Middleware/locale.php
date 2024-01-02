<?php

namespace App\Http\Middleware;

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
     *
     * @param Request $request
     * @param Closure $next
     * @return Response|JsonResponse|RedirectResponse
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
            $supportedLocales = ['en', 'hi'];
            if (!in_array($locale, $supportedLocales)) {
                // If the requested locale is not supported, fallback to default
                $locale = config('app.locale');
            }

            // Putting locale in session
            session()->put('_locale', $locale);
        }

        // Getting locale from session
        $locale = session()->get('_locale', config('app.fallback_locale'));

        // Setting app locale
        app()->setLocale($locale);

        return $next($request);
    }
}