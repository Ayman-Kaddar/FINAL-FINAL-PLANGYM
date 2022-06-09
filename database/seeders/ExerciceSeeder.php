<?php

namespace Database\Seeders;

use App\Models\Exercice;
use Illuminate\Database\Seeder;

class ExerciceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $exercices = [
            'Press Banca con barra', 'Press Inclinado con barra', 'Aperturas polea', 'Aperturas banco plano', 'Press declinado con barra', 'Press declinado con mancuernas', 'Press inclinado con mancuernas', 'Press banca con mancuernas', 'Flexiones', 'Dominadas',
            'Remo sentado', 'Jalón al pecho polea alta', 'Peso muerto rumano', 'Remo horizontal con barra', 'Elevaciones de piernas', 'Crunches', 'Oblíquos con polea', 'Press hombro sentado con barra', 'Elevaciones laterales con mancuernas', 'Press sentado con mancuernas',
            'Pájaros (posterior mancuernas)', 'Encogimientos de hombro con mancuernas (trapecios)', 'Curl bíceps con barra', 'Francés de tríceps barra Z', 'Bíceps (curl) banco inclinado', 'Fondos de tríceps', 'Curl bíceps inverso en polea', 'Press con barra agarre estrecho'
        ];

        for ($i = 0; $i < count($exercices); $i++) {
            Exercice::create([
                'name' => $exercices[$i],
            ]);
        }
    }
}
