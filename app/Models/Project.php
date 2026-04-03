<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'client_id',
        'titre',
        'description',
        'statut',
        'date_debut',
        'date_fin',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}