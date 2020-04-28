<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    public $timestamps = false;

    public function empresa() {
        return $this->belongsTo(Empresa::class);
    }

    public function vagas() {
        return $this->hasMany(Vaga::class);
    }
}
