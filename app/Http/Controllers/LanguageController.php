<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Change the application language
     */
    public function switchLanguage($locale)
    {
        // Vérifier si la langue est supportée
        if (in_array($locale, ['fr', 'en', 'es'])) {
            // Définir la locale pour cette session
            App::setLocale($locale);
            Session::put('locale', $locale);
            
            // Debug: forcer la persistance de la session
            Session::save();
        }

        return redirect()->back();
    }
}
