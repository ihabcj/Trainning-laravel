<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Article;
use Str;
use DB;
class tags extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for($i = 1; $i<= 20 ; $i++){
            array_push($data, [
                'name' => Str::random(10),
            ]);
        }
        Tag::insert($data);

        
        $articles = Article::pluck('id')->toArray();
        $tags = Tag::pluck('id')->toArray();
    
        $data = [];

        for($i = 1; $i<= 5 ; $i++){
            array_push($data, [

                'article_id' => $articles[$i],
                'tag_id' => $tags[$i],
            ]);
        }
        DB::table('article_tag')->insert($data);
    }
}
