<?php

namespace Database\Seeders;
use DB;
use Str;
use unsignedInteger;
use IlluminateSupportCarbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //public $now = now();

    public function run()
    {
        $this->call(users::class);
        $this->call(articles::class);
        $this->call(tags::class);
    }
}
