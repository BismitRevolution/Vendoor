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
        DB::table('categories')->insert([
            'category_name' => 'equipment'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'catering'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'place'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'printing'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'merchandise'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'transportation'
        ]);
    }
}
