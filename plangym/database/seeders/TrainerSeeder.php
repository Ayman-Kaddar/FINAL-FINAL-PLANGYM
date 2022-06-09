<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Trainer::create([
            'id' => 0,
            'email' => 'admin@gmail.com',
            'name' => "admin",
            'password' => 'adminja123',
        ]);

    }
}
