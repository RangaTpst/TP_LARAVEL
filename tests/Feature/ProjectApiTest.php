<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Project;

class ProjectApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_project()
    {
        $user = User::factory()->create();

        $response = $this->postJson('/api/projects', [
            'title' => 'Projet Test',
            'description' => 'Test de création',
            'owner_id' => $user->id,
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['title' => 'Projet Test']);

        $this->assertDatabaseHas('projects', [
            'title' => 'Projet Test',
            'owner_id' => $user->id,
        ]);
    }

    public function test_can_list_projects()
    {
        $user = User::factory()->create();

        Project::factory(3)->create([
            'owner_id' => $user->id
        ]);

        $response = $this->getJson('/api/projects');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    public function test_can_show_a_project()
    {
        $user = User::factory()->create();

        $project = Project::factory()->create([
            'owner_id' => $user->id
        ]);

        $response = $this->getJson("/api/projects/{$project->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => $project->title]);
    }

    public function test_can_update_a_project()
    {
        $user = User::factory()->create();

        $project = Project::factory()->create([
            'title' => 'Titre initial',
            'owner_id' => $user->id
        ]);

        $response = $this->putJson("/api/projects/{$project->id}", [
            'title' => 'Titre modifié',
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => 'Titre modifié']);

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'title' => 'Titre modifié',
        ]);
    }

    public function test_can_delete_a_project()
    {
        $user = User::factory()->create();

        $project = Project::factory()->create([
            'owner_id' => $user->id
        ]);

        $response = $this->deleteJson("/api/projects/{$project->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['message' => 'Projet supprimé avec succès.']);

        $this->assertDatabaseMissing('projects', [
            'id' => $project->id,
        ]);
    }
}
