<?php

namespace App;


use  Illuminate\Database\Eloquent\Model;

class Empresa extends Model {
  public $timestamps = false;
  protected $fillable = ['nome'];

  public function setores() {
    return $this->hasMany(Setor::class);
  }
}