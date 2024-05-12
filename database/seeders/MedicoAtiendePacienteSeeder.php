<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoAtiendePacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-16',
            'hora' => '08:00:00',
            'medico_id' => 4,
            'paciente_id' => 1,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-13',
            'hora' => '09:00:00',
            'medico_id' => 4,
            'paciente_id' => 2,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-08',
            'hora' => '10:00:00',
            'medico_id' => 4,
            'paciente_id' => 9,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-05',
            'hora' => '09:30:00',
            'medico_id' => 5,
            'paciente_id' => 1,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-20',
            'hora' => '08:30:00',
            'medico_id' => 5,
            'paciente_id' => 3,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-04-22',
            'hora' => '11:00:00',
            'medico_id' => 1,
            'paciente_id' => 8,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-15',
            'hora' => '11:15:00',
            'medico_id' => 1,
            'paciente_id' => 5,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-10',
            'hora' => '12:00:00',
            'medico_id' => 14,
            'paciente_id' => 3,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2023-10-17',
            'hora' => '12:10:00',
            'medico_id' => 2,
            'paciente_id' => 4,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2023-12-20',
            'hora' => '11:20:00',
            'medico_id' => 2,
            'paciente_id' => 7,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-04-30',
            'hora' => '09:20:00',
            'medico_id' => 10,
            'paciente_id' => 20,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-19',
            'hora' => '10:30:00',
            'medico_id' => 10,
            'paciente_id' => 22,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-15',
            'hora' => '14:00:00',
            'medico_id' => 3,
            'paciente_id' => 21,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-17',
            'hora' => '13:00:00',
            'medico_id' => 3,
            'paciente_id' => 18,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-12',
            'hora' => '13:20:00',
            'medico_id' => 11,
            'paciente_id' => 5,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-21',
            'hora' => '13:10:00',
            'medico_id' => 11,
            'paciente_id' => 6,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2023-12-18',
            'hora' => '13:40:00',
            'medico_id' => 12,
            'paciente_id' => 13,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-10',
            'hora' => '12:40:00',
            'medico_id' => 12,
            'paciente_id' => 14,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-04-02',
            'hora' => '12:30:00',
            'medico_id' => 9,
            'paciente_id' => 16,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-05',
            'hora' => '09:15:00',
            'medico_id' => 9,
            'paciente_id' => 19,
        ]);
        
        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-23',
            'hora' => '09:50:00',
            'medico_id' => 6,
            'paciente_id' => 24,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-01',
            'hora' => '12:18:00',
            'medico_id' => 6,
            'paciente_id' => 25,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-28',
            'hora' => '08:40:00',
            'medico_id' => 8,
            'paciente_id' => 10,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-30',
            'hora' => '12:39:00',
            'medico_id' => 8,
            'paciente_id' => 15,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-31',
            'hora' => '08:10:00',
            'medico_id' => 13,
            'paciente_id' => 11,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-01-08',
            'hora' => '09:35:00',
            'medico_id' => 13,
            'paciente_id' => 12,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-13',
            'hora' => '10:50:00',
            'medico_id' => 7,
            'paciente_id' => 17,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-04-02',
            'hora' => '12:09:00',
            'medico_id' => 1,
            'paciente_id' => 1,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-04-29',
            'hora' => '10:49:00',
            'medico_id' => 15,
            'paciente_id' => 10,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-27',
            'hora' => '11:29:00',
            'medico_id' => 15,
            'paciente_id' => 16,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-05',
            'hora' => '12:57:00',
            'medico_id' => 16,
            'paciente_id' => 14,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-21',
            'hora' => '13:12:00',
            'medico_id' => 16,
            'paciente_id' => 20,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-02-11',
            'hora' => '11:38:00',
            'medico_id' => 17,
            'paciente_id' => 2,
        ]);

        DB::table('medico_atiende_paciente')->insert([
            'fecha' => '2024-03-10',
            'hora' => '14:30:00',
            'medico_id' => 17,
            'paciente_id' => 4,
        ]);
    }
}
