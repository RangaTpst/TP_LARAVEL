<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * GET /api/projects
     * Liste tous les projets avec leur propriétaire et leurs tâches.
     */
    public function index()
    {
        return response()->json(
            Project::with(['owner', 'tasks'])->get()
        );
    }

    /**
     * POST /api/projects
     * Crée un nouveau projet.
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
     * GET /api/projects/{id}
     * Affiche un projet avec ses relations.
     */
    public function show($id)
    {
        $project = Project::with(['owner', 'tasks'])->findOrFail($id);

        return response()->json($project);
    }

    /**
     * PUT /api/projects/{id}
     * Met à jour un projet existant.
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
     * DELETE /api/projects/{id}
     * Supprime un projet.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return response()->json(['message' => 'Projet supprimé avec succès.']);
    }
}
