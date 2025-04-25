<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_task()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['owner_id' => $user->id]);

        $response = $this->postJson('/api/tasks', [
            'title' => 'Nouvelle tâche',
            'description' => 'Détails de la tâche',
            'status' => 'pending',
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['title' => 'Nouvelle tâche']);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Nouvelle tâche',
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);
    }

    public function test_can_list_tasks()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['owner_id' => $user->id]);

        Task::factory(3)->create([
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);

        $response = $this->getJson('/api/tasks');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    public function test_can_show_a_task()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['owner_id' => $user->id]);

        $task = Task::factory()->create([
            'title' => 'À afficher',
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);

        $response = $this->getJson("/api/tasks/{$task->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => 'À afficher']);
    }

    public function test_can_update_a_task()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['owner_id' => $user->id]);

        $task = Task::factory()->create([
            'title' => 'Ancien titre',
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);

        $response = $this->putJson("/api/tasks/{$task->id}", [
            'title' => 'Titre mis à jour',
            'status' => 'in_progress',
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => 'Titre mis à jour']);

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'title' => 'Titre mis à jour',
        ]);
    }

    public function test_can_delete_a_task()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create(['owner_id' => $user->id]);

        $task = Task::factory()->create([
            'project_id' => $project->id,
            'assigned_to' => $user->id,
        ]);

        $response = $this->deleteJson("/api/tasks/{$task->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['message' => 'Tâche supprimée avec succès.']);

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }
}
