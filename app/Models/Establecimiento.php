<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimeintos';
    public function barrio()
    {
        return $this->belongsTo(Barrio::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
