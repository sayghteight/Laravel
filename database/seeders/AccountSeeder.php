<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $arrays = range(0,20);
        foreach ($arrays as $valor) {
          DB::table('accounts')->insert([	            
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phoneIG'=> rand(600000, 700000),
            'age'=> rand(1, 60),
            'faction' => 'None',
          ]);
        }
    }
}
