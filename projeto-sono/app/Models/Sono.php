<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sono extends Model
{
    public function verificarQualidade($idade, $horas)
    {
        // Regras baseadas na tabela de recomendação diária
        if ($idade >= 0 && $idade <= 2) return ($horas >= 11 && $horas <= 14); // 1-2 anos: 11-14h [cite: 1165]
        if ($idade >= 3 && $idade <= 5) return ($horas >= 10 && $horas <= 13); // 3-5 anos: 10-13h [cite: 1167]
        if ($idade >= 6 && $idade <= 13) return ($horas >= 9 && $horas <= 11); // 6-13 anos: 9-11h [cite: 1170]
        if ($idade >= 14 && $idade <= 17) return ($horas >= 8 && $horas <= 10); // 14-17 anos: 8-10h [cite: 1175]
        if ($idade >= 18 && $idade <= 64) return ($horas >= 7 && $idade <= 9); // 18-64 anos: 7-9h [cite: 1176, 1177]
        return ($horas >= 7 && $horas <= 8); // Idosos: 7-8h [cite: 1158]
    }
}