<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    public $timestamps = false;

    public function setor() {
        return $this->belongsTo(Setor::class);
    }
}
