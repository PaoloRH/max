<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudiantesSeeder extends Seeder
{
    public function run()
    {
        Estudiante::create([
            'codigo' => 'E001',
            'nombres' => 'Juan Carlos',
            'pri_ape' => 'Pérez',
            'seg_ape' => 'Gómez',
            'dni' => '12345678'
        ]);

        Estudiante::create([
            'codigo' => 'E002',
            'nombres' => 'María Fernanda',
            'pri_ape' => 'Lopez',
            'seg_ape' => 'Ramírez',
            'dni' => '87654321'
        ]);

        Estudiante::create([
            'codigo' => 'E003',
            'nombres' => 'Luis Alberto',
            'pri_ape' => 'Martínez',
            'seg_ape' => 'Sánchez',
            'dni' => '11223344'
        ]);
    }
}
