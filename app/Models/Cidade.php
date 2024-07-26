<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'codigo_ibge', 'estado_id'];

    public function Estado(){
        return $this->belongsTo(Estado::class);
    }

}


