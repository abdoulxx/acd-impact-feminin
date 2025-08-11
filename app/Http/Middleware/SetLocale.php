<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupérer la locale depuis la session ou utiliser la locale par défaut
        $locale = $request->session()->get('locale', config('app.locale'));
        
        // Vérifier que la locale est supportée
        if (in_array($locale, ['fr', 'en', 'es'])) {
            App::setLocale($locale);
        }
        
        return $next($request);
    }
}
