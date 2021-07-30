<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        $categories = [
                        ['name' => 'やること'],
                        ['name' => '買うもの']
                      ];
        foreach($categories as $category) {
          \App\Category::create($category);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}