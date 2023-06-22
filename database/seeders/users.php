<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Str;
class users extends Seeder
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
                'email' => Str::random(10),
                'password' => 12345,
            ]);
        }
        User::insert($data);
    }
}
