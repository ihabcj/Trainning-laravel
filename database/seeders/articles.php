<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use DB;
class articles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [];

        for($i = 1; $i<= 10 ; $i++){
            array_push($data, [
                'name' => Str::random(10),
                'body' => Str::random(10),
                'user_id' => $i,
                'created_at' => now(),
            ]);
        }

        DB::table('articles')->insert($data); 

        

    }
}
