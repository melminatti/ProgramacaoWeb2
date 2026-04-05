<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
   public function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}
}
