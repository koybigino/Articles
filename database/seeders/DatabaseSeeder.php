<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $k = 0;
        for($i = 1; $i <=10; $i++){
            DB::table('categories')->insert([
                'name_category' => "category $i",
                'created_at' => now(),
                'updated_at' => now()
            ]);
            for($j = 1; $j <= 10; $j++){
                $k++;
                DB::table('articles')->insert([
                    'name_article' => "article $k ",
                    'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque,  ipsum inventore natus quos ex assumenda. Perferendis quae illum voluptates quod? In blanditiis repellat voluptate doloremque. Fugit quas odio quaerat inventore." ,
                    'view_count' => 0,
                    'image_path' => "images/1644609728-Audi.jpg",
                    'category_id' => $i,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
