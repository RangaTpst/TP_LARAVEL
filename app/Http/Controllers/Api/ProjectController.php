<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

/**
 * @group Projets
 *
 * Endpoints pour gérer les projets (CRUD complet).
 */
class ProjectController extends Controller
{
    /**
     * Liste tous les projets
     *
     * Retourne tous les projets avec leur propriétaire et leurs tâches.
     *
     * @responseField title string Le titre du projet
     * @responseField owner object Informations du propriétaire
     * @responseField tasks array Liste des tâches associées
     */
    public function index()
    {
        return response()->json(
            Project::with(['owner', 'tasks'])->get()
        );
    }

    /**
     * Crée un nouveau projet
     *
     * @bodyParam title string required Le titre du projet. Exemple: Projet Alpha
     * @bodyParam description string La description (optionnelle). Exemple: Un projet secret.
     * @bodyParam owner_id int required L'ID du propriétaire (user).
     *
     * @response 201 {
     *   "id": 1,
     *   "title": "Projet Alpha",
     *   "description": "Un projet secret.",
     *   "owner_id": 1
     * }
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'owner_id' => 'required|exists:users,id',
        ]);

        $project = Project::create($validated);

        return response()->json($project, 201);
    }

    /**
     * Affiche un projet
     *
     * Affiche les détails d’un projet ainsi que ses relations (owner, tasks).
     *
     * @urlParam id int required L’ID du projet à afficher. Exemple: 1
     */
    public function show($id)
    {
        $project = Project::with(['owner', 'tasks'])->findOrFail($id);

        return response()->json($project);
    }

    /**
     * Met à jour un projet
     *
     * @urlParam id int required L’ID du projet à modifier. Exemple: 1
     * @bodyParam title string Le nouveau titre. Exemple: Nouveau titre
     * @bodyParam description string Nouvelle description
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->update($validated);

        return response()->json($project);
    }

    /**
     * Supprime un projet
     *
     * @urlParam id int required L’ID du projet à supprimer. Exemple: 1
     *
     * @response 200 {
     *   "message": "Projet supprimé avec succès."
     * }
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return response()->json(['message' => 'Projet supprimé avec succès.']);
    }
}
