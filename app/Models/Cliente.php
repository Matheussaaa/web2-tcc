<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['idade', 'sexo', 'dataInternamento', 'diagnostico_intern',
     'diagnostico_clin', 'dataIOT', 'dataTQT', 'altura', 'peso_ideal', 'vcMax8', 'vcMax6', 'desfecho', 'dias_internamento'];

    public function vent()
    {
        return $this->hasMany('App\Model\VentiladorMec');
    }

    public function status()
    {
        return $this->hasMany('App\Model\StatusClinico');
    }
}
