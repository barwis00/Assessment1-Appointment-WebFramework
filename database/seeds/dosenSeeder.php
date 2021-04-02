<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 5; $x++){

            // insert data dummy dosen dengan faker
            DB::table('dosen')->insert([
                'nama' => $faker->name,
                'nidn' => $faker->numberBetween($max = 20933929),
                'alamat' => $faker->address,
                'kontak' => $faker->phoneNumber
            ]);

        }
    }
}
