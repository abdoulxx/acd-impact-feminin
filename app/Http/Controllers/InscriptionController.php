<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationInscription;
use App\Mail\NotificationNouvelleInscription;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_prenom' => 'required|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'fonction' => 'nullable|string|max:255',
            'destinations' => 'required|array',
            'telephone' => 'required|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $inscription = Inscription::create([
            'nom_prenom' => $validatedData['nom_prenom'],
            'entreprise' => $validatedData['entreprise'],
            'fonction' => $validatedData['fonction'],
            'destinations_choisies' => $validatedData['destinations'],
            'telephone' => $validatedData['telephone'],
            'whatsapp' => $validatedData['whatsapp'],
            'email' => $validatedData['email'],
        ]);

        // Envoi de l'email de confirmation à l'utilisateur
        Mail::to($inscription->email)->send(new ConfirmationInscription($inscription->nom_prenom));

        // Envoi de l'email de notification à l'administrateur
        Mail::to('sambsidy287@gmail.com')->send(new NotificationNouvelleInscription($inscription));

        return back()->with('show_success_modal', true);
    }
}