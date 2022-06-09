<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Session::create([
            'day' => "2022-06-14",
            'client_id' => 1,
        
        ]);
        Session::create([
            'day' => "2022-06-15",
            'client_id' => 2,
        
        ]); 
        Session::create([
            'day' => "2022-06-16",
            'client_id' => 1,
        
        ]); 
        Session::create([
            'day' => "2022-06-17",
            'client_id' => 2,
        
        ]);
        Session::create([
            'day' => "2022-06-18",
            'client_id' => 1,
        
        ]);
        Session::create([
            'day' => "2022-06-19",
            'client_id' => 2,
        
        ]);
        Session::create([
            'day' => "2022-06-20",
            'client_id' => 1,
        
        ]);
        Session::create([
            'day' => "2022-06-21",
            'client_id' => 2,
        
        ]);
    }
}
