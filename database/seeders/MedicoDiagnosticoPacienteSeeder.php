<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoDiagnosticoPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Medico 4 Paciente 1 Diagnostico 6
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-16',
            'medico_id' => 4,
            'diagnostico_id' => 6,
            'paciente_id' => 1,
        ]);

        //Medico 4 Paciente 2 Diagnostico 7
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-13',
            'medico_id' => 4,
            'diagnostico_id' => 7,
            'paciente_id' => 2,
        ]);

        //Medico 4 Paciente 9 Diagnostico 8
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-08',
            'medico_id' => 4,
            'diagnostico_id' => 8,
            'paciente_id' => 9,
        ]);

        //Medico 5 Paciente 1 Diagnostico 1
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-05',
            'medico_id' => 5,
            'diagnostico_id' => 1,
            'paciente_id' => 1,
        ]);

        //Medico 5 Paciente 3 Diagnostico 3
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-20',
            'medico_id' => 5,
            'diagnostico_id' => 3,
            'paciente_id' => 3,
        ]);

        //Medico 1 Paciente 8 Diagnostico 9
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-04-22',
            'medico_id' => 1,
            'diagnostico_id' => 9,
            'paciente_id' => 8,
        ]);

        //Medico 1 Paciente 5 Diagnostico 10
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-15',
            'medico_id' => 1,
            'diagnostico_id' => 10,
            'paciente_id' => 5,
        ]);

        //Medico 14 Paciente 3 Diagnostico 11
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-10',
            'medico_id' => 14,
            'diagnostico_id' => 11,
            'paciente_id' => 3,
        ]);

        //Medico 2 Paciente 4 Diagnostico 13
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2023-10-17',
            'medico_id' => 2,
            'diagnostico_id' => 13,
            'paciente_id' => 4,
        ]);

        //Medico 2 Paciente 7 Diagnostico 16
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2023-12-20',
            'medico_id' => 2,
            'diagnostico_id' => 16,
            'paciente_id' => 7,
        ]);

        //Medico 10 Paciente 20 Diagnostico 12
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-04-30',
            'medico_id' => 10,
            'diagnostico_id' => 12,
            'paciente_id' => 20,
        ]);

        //Medico 10 Paciente 22 Diagnostico 17
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-19',
            'medico_id' => 10,
            'diagnostico_id' => 17,
            'paciente_id' => 22,
        ]);

        //Medico 3 Paciente 21 Diagnostico 18
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-15',
            'medico_id' => 3,
            'diagnostico_id' => 18,
            'paciente_id' => 21,
        ]);

        //Medico 3 Paciente 18 Diagnostico 22
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-17',
            'medico_id' => 3,
            'diagnostico_id' => 22,
            'paciente_id' => 18,
        ]);

        //Medico 11 Paciente 5 Diagnostico 23
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-12',
            'medico_id' => 11,
            'diagnostico_id' => 23,
            'paciente_id' => 5,
        ]);

        //Medico 11 Paciente 6 Diagnostico 25
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-21',
            'medico_id' => 11,
            'diagnostico_id' => 25,
            'paciente_id' => 6,
        ]);

        //Medico 12 Paciente 13 Diagnostico 28
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2023-12-18',
            'medico_id' => 12,
            'diagnostico_id' => 28,
            'paciente_id' => 13,
        ]);

        //Medico 12 Paciente 14 Diagnostico 30
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-10',
            'medico_id' => 12,
            'diagnostico_id' => 30,
            'paciente_id' => 14,
        ]);

        //Medico 9 Paciente 16 Diagnostico 32
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-04-02',
            'medico_id' => 9,
            'diagnostico_id' => 32,
            'paciente_id' => 16,
        ]);

        //Medico 9 Paciente 19 Diagnostico 34
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-05',
            'medico_id' => 9,
            'diagnostico_id' => 34,
            'paciente_id' => 19,
        ]);
        
        //Medico 6 Paciente 24 Diagnostico 37
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-23',
            'medico_id' => 6,
            'diagnostico_id' => 37,
            'paciente_id' => 24,
        ]);

        //Medico 6 Paciente 25 Diagnostico 40
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-01',
            'medico_id' => 6,
            'diagnostico_id' => 40,
            'paciente_id' => 25,
        ]);

        //Medico 8 Paciente 10 Diagnostico 42
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-28',
            'medico_id' => 8,
            'diagnostico_id' => 42,
            'paciente_id' => 10,
        ]);

        //Medico 8 Paciente 15 Diagnostico 45
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-30',
            'medico_id' => 8,
            'diagnostico_id' => 45,
            'paciente_id' => 15,
        ]);

        //Medico 13 Paciente 11 Diagnostico 44
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-31',
            'medico_id' => 13,
            'diagnostico_id' => 44,
            'paciente_id' => 11,
        ]);

        //Medico 13 Paciente 12 Diagnostico 47
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-01-08',
            'medico_id' => 13,
            'diagnostico_id' => 47,
            'paciente_id' => 12,
        ]);

        //Medico 7 Paciente 17 Diagnostico 49
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-13',
            'medico_id' => 7,
            'diagnostico_id' => 49,
            'paciente_id' => 17,
        ]);

        //Medico 7 Paciente 23 Diagnostico 50
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-04-02',
            'medico_id' => 7,
            'diagnostico_id' => 50,
            'paciente_id' => 23,
        ]);

        //Medico 15 Paciente 10 Diagnostico 51
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-04-29',
            'medico_id' => 15,
            'diagnostico_id' => 51,
            'paciente_id' => 10,
        ]);

        //Medico 15 Paciente 16 Diagnostico 52
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-27',
            'medico_id' => 15,
            'diagnostico_id' => 52,
            'paciente_id' => 16,
        ]);

        //Medico 16 Paciente 14 Diagnostico 55
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-05',
            'medico_id' => 16,
            'diagnostico_id' => 55,
            'paciente_id' => 14,
        ]);

        //Medico 16 Paciente 20 Diagnostico 58
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-21',
            'medico_id' => 16,
            'diagnostico_id' => 58,
            'paciente_id' => 20,
        ]);

        //Medico 17 Paciente 2 Diagnostico 60
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-02-11',
            'medico_id' => 17,
            'diagnostico_id' => 60,
            'paciente_id' => 2,
        ]);

        //Medico 17 Paciente 4 Diagnostico 62
        DB::table('medico_diagnostico_paciente')->insert([
            'Fecha' => '2024-03-10',
            'medico_id' => 17,
            'diagnostico_id' => 62,
            'paciente_id' => 4,
        ]);
    }
}
