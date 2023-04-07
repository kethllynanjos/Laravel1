<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tblaboratorio";

    //campos da minha tabela
    protected $fillable = ['idLab','Laboratorio',];

    public $timestamps=false;
}






