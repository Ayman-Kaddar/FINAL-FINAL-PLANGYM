<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        Client::create([
            'name' => 'Jesús',
            'lastName' => 'Gargallo',
            'email' => 'jesus@gmail.com',
            'password' => 'jesus123',
            'telf' => '657576845',
            'age' => 22,
            'gender' => 0,
            'trainer_id' => 1
        ]);

        Client::create([
            'name' => 'Ayman',
            'lastName' => 'Kaddar',
            'email' => 'ayman@gmail.com',
            'password' => 'ayman123',
            'telf' => '675849586',
            'age' => 30,
            'gender' => 1,
            'trainer_id' => 1
        ]);
    }
}
