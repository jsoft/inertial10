<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $table = 'sectores';
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
