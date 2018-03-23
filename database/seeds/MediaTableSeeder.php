<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            'path' => '1/1.png',
            'vendor_id' => '1'
        ]);
        DB::table('media')->insert([
            'path' => '1/2.png',
            'vendor_id' => '1'
        ]);
        DB::table('media')->insert([
            'path' => '1/3.png',
            'vendor_id' => '1'
        ]);

        DB::table('media')->insert([
            'path' => '1/1.png',
            'vendor_id' => '2'
        ]);
        DB::table('media')->insert([
            'path' => '1/2.png',
            'vendor_id' => '2'
        ]);
        DB::table('media')->insert([
            'path' => '1/3.png',
            'vendor_id' => '2'
        ]);

        DB::table('media')->insert([
            'path' => '1/1.png',
            'vendor_id' => '3'
        ]);
        DB::table('media')->insert([
            'path' => '1/2.png',
            'vendor_id' => '3'
        ]);
        DB::table('media')->insert([
            'path' => '1/3.png',
            'vendor_id' => '3'
        ]);
    }
}
