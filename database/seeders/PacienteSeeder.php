<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            'DNI' => '11111111F',
            'Nombre' => 'Soledad',
            'Apellidos' => 'García Amorros',
            'Direccion'=> 'C/Mayor',
            'Email' => 'soledad@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '736152935L',
            'Nombre' => 'Daniel',
            'Apellidos' => 'Andela López',
            'Direccion'=> 'C/Menor',
            'Email' => 'daniel@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '25348961K',
            'Nombre' => 'Jose María',
            'Apellidos' => 'Ruiz Dorado',
            'Direccion'=> 'C/Sur',
            'Email' => 'josemaria@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '24867531J',
            'Nombre' => 'Natalio',
            'Apellidos' => 'Arqués López',
            'Direccion'=> 'C/Norte',
            'Email' => 'natalio@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '01486325Y',
            'Nombre' => 'Esther',
            'Apellidos' => 'Barahona Gutierrez',
            'Direccion'=> 'C/Centro',
            'Email' => 'esther@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '07951348G',
            'Nombre' => 'Luis',
            'Apellidos' => 'Bordona Martín',
            'Direccion'=> 'C/Sureste',
            'Email' => 'luis@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '14578962H',
            'Nombre' => 'Pablo',
            'Apellidos' => 'Cano López',
            'Direccion'=> 'C/Suroeste',
            'Email' => 'pablo@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '04862153D',
            'Nombre' => 'Arturo',
            'Apellidos' => 'Carrasco Perez',
            'Direccion'=> 'C/Suroeste',
            'Email' => 'arturo@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '34862159P',
            'Nombre' => 'Aurora',
            'Apellidos' => 'Cortázar Luque',
            'Direccion'=> 'C/Noroeste',
            'Email' => 'aurora@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '34852176R',
            'Nombre' => 'Alfonso',
            'Apellidos' => 'Cuevas Garrido',
            'Direccion'=> 'C/Fuentes',
            'Email' => 'alfonso@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '64831597T',
            'Nombre' => 'Pedro',
            'Apellidos' => 'Drasín Amorros',
            'Direccion'=> 'C/Nueva',
            'Email' => 'pedro@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '01534862W',
            'Nombre' => 'Luis Manuel',
            'Apellidos' => 'García Matos',
            'Direccion'=> 'C/Nueva',
            'Email' => 'luismanuel@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '385019646X',
            'Nombre' => 'Benito',
            'Apellidos' => 'Encinas López',
            'Direccion'=> 'C/Federico García',
            'Email' => 'benito@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '34866022G',
            'Nombre' => 'Bere',
            'Apellidos' => 'Naranjo Gonzalez',
            'Direccion'=> 'C/Goya',
            'Email' => 'bere@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '34444444D',
            'Nombre' => 'Alexis',
            'Apellidos' => 'Campos Naranjo',
            'Direccion'=> 'C/Sol',
            'Email' => 'alexis@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '55566647V',
            'Nombre' => 'Ismael',
            'Apellidos' => 'Berumen Cedillo',
            'Direccion'=> 'C/Español',
            'Email' => 'ismael@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '55558888R',
            'Nombre' => 'Fabiola',
            'Apellidos' => 'Estrada Barra',
            'Direccion'=> 'C/Mayor',
            'Email' => 'fabiola@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '99997775Z',
            'Nombre' => 'Fernanda',
            'Apellidos' => 'Esquivel Amorros',
            'Direccion'=> 'C/Picasso',
            'Email' => 'fernanda@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '00044423S',
            'Nombre' => 'Daniel',
            'Apellidos' => 'Farias Rosas',
            'Direccion'=> 'C/Luna Nueva',
            'Email' => 'daniel@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '55554442B',
            'Nombre' => 'Sergio',
            'Apellidos' => 'Hernandez Campos',
            'Direccion'=> 'C/Luna Vieja',
            'Email' => 'sergio@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '66663333M',
            'Nombre' => 'Sheila',
            'Apellidos' => 'Gomez Amorros',
            'Direccion'=> 'C/Fiesta',
            'Email' => 'sheila@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '66677889K',
            'Nombre' => 'Fatima',
            'Apellidos' => 'Martin Amorros',
            'Direccion'=> 'C/Antigua',
            'Email' => 'fatima@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '33311126T',
            'Nombre' => 'Carolina',
            'Apellidos' => 'Martinez Gonzalez',
            'Direccion'=> 'C/Proxima',
            'Email' => 'carolina@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '66622244C',
            'Nombre' => 'Susana',
            'Apellidos' => 'Crespo Cruz',
            'Direccion'=> 'C/Mayor',
            'Email' => 'susana@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);

        DB::table('pacientes')->insert([
            'DNI' => '33448899M',
            'Nombre' => 'Lucas',
            'Apellidos' => 'Nieto Moreno',
            'Direccion'=> 'C/Mateo',
            'Email' => 'lucas@gmail.com',
            'Telefono' => '928463719',
            'Password' => Hash::make('password')
        ]);
    }
}
