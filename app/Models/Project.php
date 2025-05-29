<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // collego il type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // collego le technologies
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
