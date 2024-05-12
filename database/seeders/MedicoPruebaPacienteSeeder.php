<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoPruebaPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 4,
            'paciente_id' => 1,
            'prueba_id' => 3,
            'Fecha' => '2024-02-16',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 4,
            'paciente_id' => 2,
            'prueba_id' => 3,
            'Fecha' => '2024-02-13',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 4,
            'paciente_id' => 9,
            'prueba_id' => 3,
            'Fecha' => '2024-03-08',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 5,
            'paciente_id' => 1,
            'prueba_id' => 3,
            'Fecha' => '2024-03-05',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 5,
            'paciente_id' => 3,
            'prueba_id' => 1,
            'Fecha' => '2024-02-20',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 1,
            'paciente_id' => 8,
            'prueba_id' => 4,
            'Fecha' => '2024-04-22',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 1,
            'paciente_id' => 5,
            'prueba_id' => 4,
            'Fecha' => '2024-02-15',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 14,
            'paciente_id' => 3,
            'prueba_id' => 4,
            'Fecha' => '2024-01-10',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 2,
            'paciente_id' => 4,
            'prueba_id' => 5,
            'Fecha' => '2023-10-17',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 2,
            'paciente_id' => 7,
            'prueba_id' => 6,
            'Fecha' => '2023-12-20',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 10,
            'paciente_id' => 20,
            'prueba_id' => 5,
            'Fecha' => '2024-04-30',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 10,
            'paciente_id' => 22,
            'prueba_id' => 6,
            'Fecha' => '2024-02-19',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 3,
            'paciente_id' => 21,
            'prueba_id' => 7,
            'Fecha' => '2024-03-15',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 3,
            'paciente_id' => 18,
            'prueba_id' => 8,
            'Fecha' => '2024-01-17',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 11,
            'paciente_id' => 5,
            'prueba_id' => 8,
            'Fecha' => '2024-01-12',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 11,
            'paciente_id' => 6,
            'prueba_id' => 9,
            'Fecha' => '2024-03-21',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 12,
            'paciente_id' => 13,
            'prueba_id' => 10,
            'Fecha' => '2023-12-18',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 12,
            'paciente_id' => 14,
            'prueba_id' => 11,
            'Fecha' => '2024-01-10',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 9,
            'paciente_id' => 16,
            'prueba_id' => 12,
            'Fecha' => '2024-04-02',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 9,
            'paciente_id' => 19,
            'prueba_id' => 13,
            'Fecha' => '2024-02-05',
        ]);
        
        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 6,
            'paciente_id' => 24,
            'prueba_id' => 14,
            'Fecha' => '2024-02-23',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 6,
            'paciente_id' => 25,
            'prueba_id' => 15,
            'Fecha' => '2024-02-01',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 8,
            'paciente_id' => 10,
            'prueba_id' => 16,
            'Fecha' => '2024-02-28',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 8,
            'paciente_id' => 15,
            'prueba_id' => 17,
            'Fecha' => '2024-01-30',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 13,
            'paciente_id' => 11,
            'prueba_id' => 16,
            'Fecha' => '2024-01-31',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 13,
            'paciente_id' => 12,
            'prueba_id' => 17,
            'Fecha' => '2024-01-08',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 7,
            'paciente_id' => 17,
            'prueba_id' => 18,
            'Fecha' => '2024-03-13',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 1,
            'paciente_id' => 1,
            'prueba_id' => 18,
            'Fecha' => '2024-04-02',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 15,
            'paciente_id' => 10,
            'prueba_id' => 19,
            'Fecha' => '2024-04-29',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 15,
            'paciente_id' => 16,
            'prueba_id' => 19,
            'Fecha' => '2024-03-27',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 16,
            'paciente_id' => 14,
            'prueba_id' => 20,
            'Fecha' => '2024-02-05',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 16,
            'paciente_id' => 20,
            'prueba_id' => 21,
            'Fecha' => '2024-02-21',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 17,
            'paciente_id' => 2,
            'prueba_id' => 22,
            'Fecha' => '2024-02-11',
        ]);

        DB::table('medico_prueba_paciente')->insert([
            'medico_id' => 17,
            'paciente_id' => 4,
            'prueba_id' => 23,
            'Fecha' => '2024-03-10',
        ]);
    }
}
