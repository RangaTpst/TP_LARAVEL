<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * GET /api/tasks
     * Liste toutes les tâches avec leur projet et la personne assignée.
     */
    public function index()
    {
        return response()->json(
            Task::with(['project', 'assignee'])->get()
        );
    }

    /**
     * POST /api/tasks
     * Crée une nouvelle tâche.
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
     * GET /api/tasks/{id}
     * Affiche une tâche avec ses relations.
     */
    public function show($id)
    {
        $task = Task::with(['project', 'assignee'])->findOrFail($id);

        return response()->json($task);
    }

    /**
     * PUT /api/tasks/{id}
     * Met à jour une tâche existante.
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
     * DELETE /api/tasks/{id}
     * Supprime une tâche.
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Tâche supprimée avec succès.']);
    }
}
