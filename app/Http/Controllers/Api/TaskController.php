<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

/**
 * @group Tâches
 *
 * Endpoints pour gérer les tâches liées aux projets.
 */
class TaskController extends Controller
{
    /**
     * Liste toutes les tâches
     *
     * Retourne toutes les tâches avec leur projet et l'utilisateur assigné.
     *
     * @responseField title string Le titre de la tâche
     * @responseField status string Le statut de la tâche (pending, in_progress, done)
     * @responseField project object Projet associé
     * @responseField assignee object Utilisateur assigné
     */
    public function index()
    {
        return response()->json(
            Task::with(['project', 'assignee'])->get()
        );
    }

    /**
     * Crée une nouvelle tâche
     *
     * @bodyParam title string required Le titre de la tâche. Exemple: Ajouter la page d'accueil
     * @bodyParam description string Description de la tâche. Exemple: Doit contenir les boutons de connexion.
     * @bodyParam status string Statut de la tâche. Doit être 'pending', 'in_progress' ou 'done'. Exemple: pending
     * @bodyParam project_id int required ID du projet associé. Exemple: 1
     * @bodyParam assigned_to int required ID de l'utilisateur assigné. Exemple: 2
     *
     * @response 201 {
     *   "id": 1,
     *   "title": "Ajouter la page d'accueil",
     *   "status": "pending"
     * }
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,done',
            'project_id' => 'required|exists:projects,id',
            'assigned_to' => 'required|exists:users,id',
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    /**
     * Affiche une tâche
     *
     * Retourne les détails d'une tâche, son projet et la personne assignée.
     *
     * @urlParam id int required ID de la tâche à afficher. Exemple: 1
     */
    public function show($id)
    {
        $task = Task::with(['project', 'assignee'])->findOrFail($id);

        return response()->json($task);
    }

    /**
     * Met à jour une tâche
     *
     * @urlParam id int required ID de la tâche à modifier. Exemple: 1
     * @bodyParam title string Nouveau titre. Exemple: Nouvelle tâche
     * @bodyParam description string Nouvelle description
     * @bodyParam status string Nouveau statut (pending, in_progress, done). Exemple: done
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,done',
        ]);

        $task->update($validated);

        return response()->json($task);
    }

    /**
     * Supprime une tâche
     *
     * @urlParam id int required ID de la tâche à supprimer. Exemple: 1
     *
     * @response 200 {
     *   "message": "Tâche supprimée avec succès."
     * }
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Tâche supprimée avec succès.']);
    }
}
