<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'owner_id'];

    public function owner()
    {
        // Le projet appartient à un utilisateur
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function tasks()
    {
        // Un projet contient plusieurs tâches
        return $this->hasMany(Task::class);
    }
}
