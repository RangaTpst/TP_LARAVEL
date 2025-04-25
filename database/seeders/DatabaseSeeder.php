<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Créer 3 utilisateurs
    $users = User::factory(3)->create();

    foreach ($users as $user) {
        // Pour chaque utilisateur, créer 2 projets
        $projects = Project::factory(2)->create([
            'owner_id' => $user->id,
        ]);

        foreach ($projects as $project) {
            // Pour chaque projet, créer 5 tâches assignées à un utilisateur aléatoire
            Task::factory(5)->create([
                'project_id' => $project->id,
                'assigned_to' => $users->random()->id,
            ]);
        }
    }
}
}
