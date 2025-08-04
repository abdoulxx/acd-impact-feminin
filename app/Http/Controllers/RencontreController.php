<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencontreController extends Controller
{
    /**
     * Affiche la page de la rencontre.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('rencontre');
    }
}
