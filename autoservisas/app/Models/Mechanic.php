<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function mechanicAutoshop()
    {
        return $this->belongsTo('App\Models\Autoshop', 'autoshop_id', 'id');
    }

    public function servicesCount()
    {
        return $this->hasMany('App\Models\Service', 'mechanic_id', 'id');
    }
}
