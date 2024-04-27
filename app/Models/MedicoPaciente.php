<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoPaciente extends Model
{
    use HasFactory;

    protected $table = "medico_atiende_paciente";

    public function medicos() {
        return $this->belongsTo(Medicos::class);
    }

    public function pacientes() {
        return $this->belongsTo(Pacientes::class);
    }
}
