<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status', 'project_id', 'assigned_to'];

    public function project()
    {
        // La tâche appartient à un projet
        return $this->belongsTo(Project::class);
    }

    public function assignee()
    {
        // La tâche est assignée à un utilisateur
        return $this->belongsTo(User::class, 'assigned_to');
    }
}

