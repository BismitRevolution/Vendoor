<?php

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            'name' => 'MTZ Equipment 1',
            'description' => 'Berdiri sejak 1997, telah melayani 10.000 project, beroperasi di Jabodetabek',
            'address' => 'Jalan raya margonda no. 525, Depok, Jawa Barat',
            'email' => 'mtzequipment@gmail.com',
            'phone' => '0812xxxxx',
            'website' => 'www.mtzeq.com',
            'location_id' => 2,
            'category_id' => 1
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vendors')->insert([
            'name' => 'MTZ Equipment 2',
            'description' => 'Berdiri sejak 1997, telah melayani 10.000 project, beroperasi di Jabodetabek',
            'address' => 'Jalan raya margonda no. 525, Depok, Jawa Barat',
            'email' => 'mtzequipment@gmail.com',
            'phone' => '0812xxxxx',
            'website' => 'www.mtzeq.com',
            'location_id' => 2,
            'category_id' => 1
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vendors')->insert([
            'name' => 'MTZ Equipment 3',
            'description' => 'Berdiri sejak 1997, telah melayani 10.000 project, beroperasi di Jabodetabek',
            'address' => 'Jalan raya margonda no. 525, Depok, Jawa Barat',
            'email' => 'mtzequipment@gmail.com',
            'phone' => '0812xxxxx',
            'website' => 'www.mtzeq.com',
            'location_id' => 2,
            'category_id' => 1
            // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
