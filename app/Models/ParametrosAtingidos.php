<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParametrosAtingidos extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function vent()
    {
        return $this->belongsTo('App\Models\VentiladorMec');
    }
}
