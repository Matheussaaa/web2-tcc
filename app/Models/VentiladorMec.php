<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VentiladorMec extends Model
{
    protected $table = 'ventilador_mecs';

    use HasFactory;
    use SoftDeletes;

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function para()
    {
        return $this->hasMany('App\Model\ParametrosAtingidos');
    }
}
