<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoshop extends Model
{
    use HasFactory;

    public function autoshopMechanics()
    {
        return $this->hasMany('App\Models\Mechanic', 'author_id', 'id');
    }

    public function autoshopServices()
    {
        return $this->hasMany('App\Models\Service', 'autoshop_id', 'id');
    }
}
