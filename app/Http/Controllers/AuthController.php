<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Connexion de l'utilisateur et création du token.
     */
    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Recherche de l'utilisateur par email
        $user = User::where('email', $request->email)->first();

        // Vérification du mot de passe
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les identifiants sont incorrects.'],
            ]);
        }

        // Création et retour du token
        return response()->json([
            'token' => $user->createToken('api-token')->plainTextToken,
            'user' => $user,
        ]);
    }

    /**
     * Retourne l'utilisateur connecté.
     */
    public function user(Request $request)
    {
        return $request->user();
    }

    /**
     * Déconnexion : supprime tous les tokens de l'utilisateur.
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Déconnecté avec succès.']);
    }
}
