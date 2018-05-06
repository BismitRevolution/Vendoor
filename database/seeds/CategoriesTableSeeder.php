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
            'category_name' => 'perlengkapan'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'katering'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'tempat'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'percetakan'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'merchandise'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'transportasi'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'All',
        ]);
        DB::table('categories')
            ->where('category_name', 'All')
            ->update(['category_id' => 0]);
    }
}
