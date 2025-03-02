<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\Sport;
use App\Models\Spectateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;

    public function spectateur () {
        return $this->belongsToMany(Spectateur::class);
    }

    public function sport () {
        return $this->belongsTo(Sport::class);
    }

    public function lieu () {
        return $this->belongsTo(Lieu::class);
    }
}
