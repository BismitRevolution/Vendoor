<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'Jakarta'
        ]);
        DB::table('locations')->insert([
            'name' => 'Bandung'
        ]);
        DB::table('locations')->insert([
            'name' => 'Surabaya'
        ]);
        DB::table('locations')->insert([
            'name' => 'Bali'
        ]);
        DB::table('locations')->insert([
            'name' => 'Medan'
        ]);
        DB::table('locations')->insert([
            'name' => 'Semarang'
        ]);    
    }
}
