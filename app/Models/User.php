<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // 👈 Requis pour l'authentification via Sanctum

class User extends Authenticatable
{
    /**
     * Traits utilisés :
     * - HasApiTokens : permet de générer des tokens avec Sanctum
     * - HasFactory : pour les seeders / factories
     * - Notifiable : pour les notifications
     */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Les attributs que l'on peut remplir en masse (mass assignable).
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Les attributs cachés lors de la sérialisation (par ex. API JSON).
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs qui doivent être castés automatiquement.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relation : un utilisateur peut posséder plusieurs projets.
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'owner_id');
    }

    /**
     * Relation : un utilisateur peut avoir plusieurs tâches assignées.
     */
    public function assignedTasks()
    {
        return $this->hasMany(Task::class, 'assigned_to');
    }
}
