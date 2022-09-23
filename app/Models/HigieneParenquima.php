<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HigieneParenquima extends Model
{
    protected $table = 'higiene_parenquimas';

    use HasFactory;

    public function status()
    {
        return $this->belongsTo('App\Models\StatusClinico');
    }
}
