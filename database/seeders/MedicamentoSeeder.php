<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Medicamentos para el corazón
        DB::table('medicamentos')->insert([
            'Nombre' => 'Captopril'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Enalapril'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fosinopril'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Lisinopril'
        ]);

        //Medicamemtos para la alergia
        DB::table('medicamentos')->insert([
            'Nombre' => 'Cetirizina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Desloratadina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fexofenadina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Levocetirizina'
        ]);

        //Medicamentos para el sobrepeso
        DB::table('medicamentos')->insert([
            'Nombre' => 'Orlistat'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fentermina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Naltrexona'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Liraglutida'
        ]);

        //Medicamentos para los pulmones
        DB::table('medicamentos')->insert([
            'Nombre' => 'Aclidinio'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Glicopirronio'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Ipratropio'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Tiotropio'
        ]);

        //Medicamentos neurologia
        DB::table('medicamentos')->insert([
            'Nombre' => 'Spinzara'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Ocrevus'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Mavenclad'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fycompa'
        ]);

        //Medicamentos pedriatra
        DB::table('medicamentos')->insert([
            'Nombre' => 'Acetilcisteina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Aciclovir oral'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Amoxicilina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Atropina'
        ]);

        //Medicamentos psiquiatra
        DB::table('medicamentos')->insert([
            'Nombre' => 'Citalopram'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fluoxetina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Paroxetine'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Sertraline'
        ]);

        //Medicamentos fisioterapia
        DB::table('medicamentos')->insert([
            'Nombre' => 'Ibuprofeno'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Naproxeno'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Aspirina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Diclofecano'
        ]);

        //Medicamentos reumatologo
        DB::table('medicamentos')->insert([
            'Nombre' => 'Paracetamol'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Tramadol'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Nolotil'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Morfina'
        ]);

        //Medicamentos dermatologo
        DB::table('medicamentos')->insert([
            'Nombre' => 'Aciclovir topico'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Beclometasona'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Acido gliconico'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Ciclopirox'
        ]);

        //Medicamentos oftalmologo
        DB::table('medicamentos')->insert([
            'Nombre' => 'Reactine Colirio'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Alergoftal Colirio'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Lipolasic Gel Oftalmico'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Otispring Colirio'
        ]);

        //Medicamentos urologia
        DB::table('medicamentos')->insert([
            'Nombre' => 'Trospium'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Fesoterodina'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Solifenancia'
        ]);

        DB::table('medicamentos')->insert([
            'Nombre' => 'Tolterodina'
        ]);

    }
}
