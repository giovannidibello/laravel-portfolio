<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // collego i progetti
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
