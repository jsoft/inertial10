<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $table = 'barrios';
    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
    public function establecimientos()
    {
        return $this->hasMany(establecimiento::class);
    }
}
