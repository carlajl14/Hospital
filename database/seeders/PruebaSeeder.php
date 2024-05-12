<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pruebas corazon 
        DB::table('pruebas')->insert([
            'Nombre' => 'Electrocardiograma'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Prueba de esfuerzo'
        ]);

        //Pruebas alergia
        DB::table('pruebas')->insert([
            'Nombre' => 'Prueba cutanea'
        ]);

        //Pruebas endocrino
        DB::table('pruebas')->insert([
            'Nombre' => 'Nutricion enterica en el hogar'
        ]);

        //Pruebas neumologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Espirometria'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Medicion de los volumenes pulmonares'
        ]);

        //Pruebas neurologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Resonancia magnetica'
        ]);
        
        DB::table('pruebas')->insert([
            'Nombre' => 'Electroencefalograma'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Punción Lumbar'
        ]);

        //Pruebas pediatria
        DB::table('pruebas')->insert([
            'Nombre' => 'Revision del recien nacido'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Revision infantil'
        ]);

        //Pruebas psiquiatria
        DB::table('pruebas')->insert([
            'Nombre' => 'Trastorno del estado de animo'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Trastorno de ansiedad'
        ]);

        //Pruebas fisioterapia
        DB::table('pruebas')->insert([
            'Nombre' => 'Evaluacion de los signos vitales'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Evaluacion de la postura'
        ]);

        //Pruebas reumatologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Anticuerpos antinucleares'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Antigeno Leucocitario Humano'
        ]);

        //Pruebas dermatologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Biopsia cutanea'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Dermatoscopia y trioscopia'
        ]);

        //Pruebas oftalmologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Retinografia'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Biometria'
        ]);

        //Pruebas urologia
        DB::table('pruebas')->insert([
            'Nombre' => 'Analisis del PSA'
        ]);

        DB::table('pruebas')->insert([
            'Nombre' => 'Biopsia fusion'
        ]);
    }
}
