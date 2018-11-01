<?php

use Illuminate\Database\Seeder;
use App\Admin\StaticPage;

class StaticPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_pages')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1,20) as $index){
           StaticPage::create([
           		'title' => $faker->word,
           		'title_en' => $faker->word,
           		'short_description' => $faker->paragraph(1,true),
           		'short_description_en' => $faker->paragraph(1,true),
           		'description' => $faker->text(200),
           		'description_en' => $faker->text(200),
           		'image' => $faker->image
           ]);
        }
    }
}
