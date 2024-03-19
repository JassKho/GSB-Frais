<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Comptable;

class ConnexionC extends Controller
{
    public function demandeConnexionC()
    {
        return view('comptable.connexion');
    }

    public function valideConnexionC(Request $request)
    {
        $credentials = $request->only('login', 'mdp');

        $user = Comptable::where('login', $credentials['login'])->first();

        if (!$user || $credentials['mdp'] !== $user->mdp) {
            return back()->withErrors(['login_error' => 'Identifiants invalides. Veuillez réessayer.']);
        }

        Auth::login($user);

        // Enregistrement des valeurs dans la session
        Session::put('prenom', $user->prenom);
        Session::put('nom', $user->nom);

        return redirect('/comptable/sommaireC');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Vous avez été déconnecté.');
    }
}
