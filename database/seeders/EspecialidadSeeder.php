<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidades')->insert([
            'Nombre' => 'Alergologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Cardiologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Endocrinologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Neumologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Neurologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Pediatria'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Psiquiatria'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Fisioterapia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Reumatologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Dermatologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Oftalmologia'
        ]);

        DB::table('especialidades')->insert([
            'Nombre' => 'Urologia'
        ]);
    }
}
