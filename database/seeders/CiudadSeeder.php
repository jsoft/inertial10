<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            ['nombre' => 'Bogotá', 'sectores' => ['Norte', 'Sur', 'Oeste', 'Suroeste']],
            ['nombre' => 'Medellín', 'sectores' => ['Norte', 'Sur', 'Oeste', 'Suroeste']],
            ['nombre' => 'Cali', 'sectores' => ['Norte', 'Sur', 'Oeste', 'Suroeste']],
            // Agrega más ciudades aquí
        ];

        foreach ($ciudades as $ciudadData) {
            $ciudad = Ciudad::create(['nombre' => $ciudadData['nombre']]);

            foreach ($ciudadData['sectores'] as $sector) {
                Sector::create([
                    'nombre' => $sector,
                    'ciudad_id' => $ciudad->id,
                ]);
            }
        }
    }
}
