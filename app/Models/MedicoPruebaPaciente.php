<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoPruebaPaciente extends Model
{
    use HasFactory;

    protected $table = "medico_prueba_paciente";
    
    public function medicos() {
        return $this->belongsToMany(Medicos::class);
    }

    public function pacientes() {
        return $this->belongsToMany(Pacientes::class);
    }

    public function pruebas() {
        return $this->belongsToMany(Pruebas::class);
    }
}
