<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Diagnostico para electrocardiograma
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Frecuencia cardiaca inusualmente acelerada (taquicardia)'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Frecuencia cardiaca inusualmente lenta (bradicardia)'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Latidos irregulares del corazon (arritmias)'
        ]);

        //Diagnostico prueba de esfuerzo
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Alteraciones electrocardiográficas'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Dolor en el torax'
        ]);

        //Diagnostico prueba cutanea
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Alergia al polen y a los acaros del polvo'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Alergia a los frutos secos'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Alergia a las frutas'
        ]);

        //Diagnostico nutricion enterica en el hogar
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Alteraciones mecánicas de la deglución o del tránsito, que cursan con afagia o disfagia severa y que precisan sonda'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Trastornos neuromotores que impiden la deglución o el tránsito y precisan sonda'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Requerimientos especiales de energía y/o nutrientes'
        ]);

        //Diagnostico espirometria
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Asma'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Enfermedad pulmonar obstructiva crónica (EPOC)'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Bronquitis crónica'
        ]);

        //Diagnostico volumen pulmonar
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Sobrepeso extremo'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Fibrosis de los pulmones'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Sarcoidosis y esclerodermia'
        ]);

        //Diagnostico resonancia magnetica
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Anomalia congenitca'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Enfermedad de Huntington'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Parkinson'
        ]);

        //Diagnostico electroencefalograma
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Disfuncion cerebral'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Trastorno del sueño'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Tumor cerebral'
        ]);

        //Diagnostico Punción Lumbar
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Meningitis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Sindrome de Guillain-Barre'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Esclerosis multiple'
        ]);

        //Diagnostico Revision del recien nacido
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Fibrosis quistica'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Toxoplasmosis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Fenilcetonuria'
        ]);

        //Diagnostico Revision infantil
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Problemas de crecimieno'
        ]);

        //Diagnostico Trastorno del estado de animo
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Tristeza o euforia mas intensan de lo normal'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Limitación para llevar una vida normal'
        ]);

        //Diagnostico Trastorno de ansiedad
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Agitacion o nerviosismo'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Dificultades para concentrarse'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Facilidad para fatigarse'
        ]);

        //Diagnostico Evaluacion de los signos vitales
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Presion elevada'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Presion arterial alta'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Presión arterial normal'
        ]);

        //Diagnostico Evaluacion de la postura
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Dorso plano o hipercifosis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Decaimiento postural'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Hiperlordosis'
        ]);

        //Diagnostico Anticuerpos antinucleares
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Polimiositis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Artritis idiopatica juvenil'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Artritis reumatoide'
        ]);

        //Diagnostico Antigeno Leucocitario Humano
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Diabetes tipo 1'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Espondilitis anquilosante'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Lupus Erimetamoso Sistemico'
        ]);

        //Diagnostico Biopsia cutanea
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Cancer de piel'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Infeccion en la piel'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Eccema'
        ]);

        //Diagnostico Dermatoscopia y trioscopia
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Dermatitis seborreica'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Psoriasis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Sequedad del cuero cabelludo'
        ]);

        //Diagnostico Retinografia
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Retinopatia diabética'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Retinopatia hipertensiva'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Retinosis pigmentaria'
        ]);

        //Diagnostico Biometria
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Anemia'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Leucemia'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Trombocitopenia'
        ]);

        //Diagnostico Analisis del PSA
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Prostatitis'
        ]);

        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Hiperplasia prostatica benigna'
        ]);

        //Diagnostico Biopsia fusion
        DB::table('diagnosticos')->insert([
            'Descripcion' => 'Cancer de prostata'
        ]);
    }
}
