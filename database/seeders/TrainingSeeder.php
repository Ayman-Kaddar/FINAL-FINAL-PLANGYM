<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Training::create([
            'weight' => 8,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 7,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 6,
            'repetition' => 15,
            'time' => 5,
            'exercice_id' => 8,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 8,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 6,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 10,
            'repetition' => 20,
            'time' => 3,
            'exercice_id' => 5,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 50,
            'repetition' => 10,
            'time' => 6,
            'exercice_id' => 3,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 23,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 14,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 34,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 12,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 12,
            'repetition' => 25,
            'time' => 4,
            'exercice_id' => 9,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 56,
            'repetition' => 8,
            'time' => 5,
            'exercice_id' => 18,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 45,
            'repetition' => 12,
            'time' => 3,
            'exercice_id' => 1,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 15,
            'repetition' => 10,
            'time' => 8,
            'exercice_id' => 20,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 12,
            'repetition' => 15,
            'time' => 3,
            'exercice_id' => 2,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 9,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 7,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 67,
            'repetition' => 10,
            'time' => 7,
            'exercice_id' => 16,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 46,
            'repetition' => 10,
            'time' => 2,
            'exercice_id' => 17,
            'session_id' => 1,
            'remark' => 'Esta bien hecho',
        ]);
        Training::create([
            'weight' => 18,
            'repetition' => 10,
            'time' => 3,
            'exercice_id' => 14,
            'session_id' => 2,
            'remark' => 'Esta bien hecho',
        ]);
    }
}
