<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoDiagnosticoPaciente extends Model
{
    use HasFactory;

    protected $table = "medico_diagnostico_paciente";

    public function medicos() {
        return $this->belongsTo(Medicos::class);
    }

    public function pacientes() {
        return $this->belongsTo(Pacientes::class);
    }

    public function diagnosticos() {
        return $this->belongsTo(Diagnosticos::class);
    }
}
