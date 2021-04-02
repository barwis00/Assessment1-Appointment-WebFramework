<?php

use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class mahasiswaSeeder extends Seeder
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
 
             // insert data dummy mahasiswa dengan faker
             DB::table('mahasiswa')->insert([
                 'nama' => $faker->name,
                 'nim' => $faker->numberBetween($max = 18033929),
                 'tanggal_lahir' => $faker->date($format = 'Y-m-d'),
                 'alamat' => $faker->address,
                 'tahun_masuk' => $faker->date($format = 'Y')
             ]);
 
         }
 
    }
}
