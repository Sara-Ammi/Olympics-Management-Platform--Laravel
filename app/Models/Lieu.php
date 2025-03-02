<?php

namespace App\Models;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lieu extends Model
{
    use HasFactory;

    public function competition () {
        return $this->HasMany(Competition::class);
    }

}
