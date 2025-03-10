<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;
use Illuminate\Support\Carbon;
use App\Models\post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Factory::create();
        for($i = 0; $i < 20; $i++){
            post::create([
                'title'=> $faker->realText(30),
                'thumbnail'=> $faker->imageUrl(1000,600),
                'excerpt' => $faker->paragraph(),
                'content' =>$faker->text(500),
                'user_id' =>$faker->numberBetween(1,5),
                'views' =>$faker->numberBetween(1,5),
                'slug' => $faker->slug()
              ]);
            }

    }
}
