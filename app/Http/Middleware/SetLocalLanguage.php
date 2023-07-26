<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocalLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        if (request('change_language')) {
            session()->put('language', request('change_language'));
            $language = request('change_language');
        } elseif (session('language')) {
            $language = session('language');
        } elseif (config('panel.primary_language')) {
            $language = config('blog.primary_language');
        }

        if (isset($language)) {
            app()->setLocale($language);
        }

        return $next($request);
    }
}
