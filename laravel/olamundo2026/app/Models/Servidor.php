<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    public function getAtributo ($atributo){
        return $_SERVER[$atributo];
    }

    public function getData () {
        date_default_timezone_set("America/Sao_Paulo");
        return date("d/m/Y h:i:s a");
    }
}