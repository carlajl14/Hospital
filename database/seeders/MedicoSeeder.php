<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Medico;
use Illuminate\Support\Facades\Hash;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        DB::table('medicos')->insert([
            'DNI' => '11111111H',
            'Nombre' => 'Maria Carmen',
            'Apellidos' => 'Rodriguez Martin',
            'Direccion'=> 'C/Mayor',
            'Email' => 'maricarmen@gmail.com',
            'Telefono' => '928463719',
            'especialidad_id' => 3,
            'Password' => Hash::make('password')
        ]);

        //2
        DB::table('medicos')->insert([
            'DNI' => '22222222D',
            'Nombre' => 'Antonio',
            'Apellidos' => 'Lara Perez',
            'Direccion'=> 'C/Menor',
            'Email' => 'antonio@gmail.com',
            'Telefono' => '832946105',
            'especialidad_id' => 4,
            'Password' => Hash::make('password')
        ]);

        //3
        DB::table('medicos')->insert([
            'DNI' => '33333333F',
            'Nombre' => 'Lucia',
            'Apellidos' => 'Alejo Garcia',
            'Direccion'=> 'C/Centro',
            'Email' => 'lucia@gmail.com',
            'Telefono' => '647264826',
            'especialidad_id' => 5,
            'Password' => Hash::make('password')
        ]);

        //4
        DB::table('medicos')->insert([
            'DNI' => '44444444V',
            'Nombre' => 'Martin',
            'Apellidos' => 'Fernandez Diaz',
            'Direccion'=> 'C/Sur',
            'Email' => 'martin@gmail.com',
            'Telefono' => '243596565',
            'especialidad_id' => 1,
            'Password' => Hash::make('password')
        ]);

        //5
        DB::table('medicos')->insert([
            'DNI' => '55555555C',
            'Nombre' => 'Alicia',
            'Apellidos' => 'Marcos Lopez',
            'Direccion'=> 'C/Norte',
            'Email' => 'alicia@gmail.com',
            'Telefono' => '240546315',
            'especialidad_id' => 2,
            'Password' => Hash::make('password')
        ]);

        //6
        DB::table('medicos')->insert([
            'DNI' => '66666666X',
            'Nombre' => 'Pedro',
            'Apellidos' => 'Sanchez Gomez',
            'Direccion'=> 'C/Noreste',
            'Email' => 'pedro@gmail.com',
            'Telefono' => '249304862',
            'especialidad_id' => 8,
            'Password' => Hash::make('password')
        ]);

        //7
        DB::table('medicos')->insert([
            'DNI' => '77777777N',
            'Nombre' => 'Goyo',
            'Apellidos' => 'Gil Serrano',
            'Direccion'=> 'C/Sureste',
            'Email' => 'goyo@gmail.com',
            'Telefono' => '928463719',
            'especialidad_id' => 10,
            'Password' => Hash::make('password')
        ]);

        //8
        DB::table('medicos')->insert([
            'DNI' => '88888888L',
            'Nombre' => 'Paco',
            'Apellidos' => 'Morales Ramos',
            'Direccion'=> 'C/Principe',
            'Email' => 'paco@gmail.com',
            'Telefono' => '385415725',
            'especialidad_id' => 9,
            'Password' => Hash::make('password')
        ]);

        //9
        DB::table('medicos')->insert([
            'DNI' => '99999999P',
            'Nombre' => 'Jorge',
            'Apellidos' => 'Blanco Molina',
            'Direccion'=> 'C/Iglesia',
            'Email' => 'jorge@gmail.com',
            'Telefono' => '634581440',
            'especialidad_id' => 7,
            'Password' => Hash::make('password')
        ]);

        //10
        DB::table('medicos')->insert([
            'DNI' => '01029384J',
            'Nombre' => 'Marta',
            'Apellidos' => 'Garcia Sanchez',
            'Direccion'=> 'C/Constitucion',
            'Email' => 'marta@gmail.com',
            'Telefono' => '253482562',
            'especialidad_id' => 4,
            'Password' => Hash::make('password')
        ]);

        //11
        DB::table('medicos')->insert([
            'DNI' => '23497463K',
            'Nombre' => 'Paula',
            'Apellidos' => 'Molina Ortega',
            'Direccion'=> 'C/Fuente',
            'Email' => 'paula@gmail.com',
            'Telefono' => '248345983',
            'especialidad_id' => 5,
            'Password' => Hash::make('password')
        ]);

        //12
        DB::table('medicos')->insert([
            'DNI' => '74832917M',
            'Nombre' => 'Mariana',
            'Apellidos' => 'Ortega Delgado',
            'Direccion'=> 'C/Nueva',
            'Email' => 'mariana@gmail.com',
            'Telefono' => '348521679',
            'especialidad_id' => 6,
            'Password' => Hash::make('password')
        ]);

        //13
        DB::table('medicos')->insert([
            'DNI' => '93847137G',
            'Nombre' => 'Manuel',
            'Apellidos' => 'Marin Rubio',
            'Direccion'=> 'C/Real',
            'Email' => 'manuel@gmail.com',
            'Telefono' => '524863159',
            'especialidad_id' => 9,
            'Password' => Hash::make('password')
        ]);

        //14
        DB::table('medicos')->insert([
            'DNI' => '73648264T',
            'Nombre' => 'Ramon',
            'Apellidos' => 'Olgado Garcia',
            'Direccion'=> 'C/Miguel de Cervantes',
            'Email' => 'ramon@gmail.com',
            'Telefono' => '348527692',
            'especialidad_id' => 3,
            'Password' => Hash::make('password')
        ]);

        //15
        DB::table('medicos')->insert([
            'DNI' => '17362578B',
            'Nombre' => 'Alejandra',
            'Apellidos' => 'Sanz Medina',
            'Direccion'=> 'C/Picasso',
            'Email' => 'alejandra@gmail.com',
            'Telefono' => '928463719',
            'especialidad_id' => 10,
            'Password' => Hash::make('password')
        ]);

        //16
        DB::table('medicos')->insert([
            'DNI' => '92756184Q',
            'Nombre' => 'Ana',
            'Apellidos' => 'Castro Martin',
            'Direccion'=> 'C/Federico',
            'Email' => 'ana@gmail.com',
            'Telefono' => '928463719',
            'especialidad_id' => 11,
            'Password' => Hash::make('password')
        ]);
        
        //17
        DB::table('medicos')->insert([
            'DNI' => '274738273V',
            'Nombre' => 'Alejandro',
            'Apellidos' => 'Sanz Perez',
            'Direccion'=> 'C/Goya',
            'Email' => 'alejandro@gmail.com',
            'Telefono' => '928463719',
            'especialidad_id' => 12,
            'Password' => Hash::make('password')
        ]);
    }
}
