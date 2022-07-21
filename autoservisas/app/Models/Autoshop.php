<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoshop extends Model
{
    use HasFactory;

    public function mechanicCount()
    {
        return $this->hasMany('App\Models\Mechanic', 'autoshop_id', 'id');
    }
}
