<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function serviceAutoshop()
    {
        return $this->belongsTo('App\Models\Autoshop', 'autoshop_id', 'id');
    }
}
