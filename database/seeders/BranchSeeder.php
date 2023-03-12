<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'name_branch' => 'Ingénierie des Systèmes d Information et du Logiciel (ISIL)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,
        ]);
        Branch::create([
            'name_branch' => 'Systèmes Informatiques (SI)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'Informatique Décisionnelle et Optimisation (IDO)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'Réseaux et Technologies de l Information et de la Communication (RTIC)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'Système d Information et Génie Logiciel (SIGL)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'Intelligence artificielle (IA)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);


    }
}
