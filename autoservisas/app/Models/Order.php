<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service as S;


class Order extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(S::class, 'service_id', 'id');
    }
}
